<?php

namespace AppBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\CsvExporter;
use VideoPlayerBundle\Entity\YouTubeAnalytics;

/**
 * @author Arthur Gribet <a.gribet@gmail.com>
 */
class AdminController extends BaseAdminController
{
    private $csvExporter;

    public function __construct(CsvExporter $csvExporter)
    {
        $this->csvExporter = $csvExporter;
    }


    private function move(Request $request, $position)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');
        $entityName = $request->query->get('entity');
        $entity = $em->getRepository("AppBundle:{$entityName}")->find($id);

        if ($entity !== null) {
            $entity->setPosition($entity->getPosition() + $position);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirectToRoute('easyadmin', [
            'action' => 'list',
            'entity' => $request->query->get('entity'),
            'sortField' => 'position',
            'sortDirection' => 'ASC',
        ]);
    }

    public function exportAction()
    {
        $sortDirection = $this->request->query->get('sortDirection');
        if (empty($sortDirection) || !in_array(strtoupper($sortDirection), ['ASC', 'DESC'])) {
            $sortDirection = 'DESC';
        }

        $queryBuilder = $this->createListQueryBuilder(
            $this->entity['class'],
            $sortDirection,
            $this->request->query->get('sortField'),
            $this->entity['list']['dql_filter']
        );

        return $this->csvExporter->getResponseFromQueryBuilder(
            $queryBuilder,
            YouTubeAnalytics::class,
            'YouTubeAnalytics.csv'
        );
    }

    /**
     * @Route("/admin/moveUp", name="admin_move_up",
     *      options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function moveUpAction(Request $request)
    {
        return $this->move($request, -1);
    }

    /**
     * @Route("/admin/moveDown", name="admin_move_down",
     *      options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function moveDownAction(Request $request)
    {
        return $this->move($request, 1);
    }
}
