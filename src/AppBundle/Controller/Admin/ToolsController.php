<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/tools")
 *
 * @author Arthur Gribet <a.gribet@gmail.com>
 *  @Security("has_role('ROLE_ADMIN')")
 */
class ToolsController extends Controller
{
    /**
     * @Route("/clearcache", name="admin_tools_cc",
     *      options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function clearCacheAction()
    {
        $env = $this->getParameter('kernel.environment');
        $commande = [
            'command' => 'c:c',
            '-e' => $env,
        ];
        $output = $this->createCommande($commande);
        $this->addFlash('success', $output);

        return $this->render(':admin/tools:clear_cache.html.twig');
    }

    /**
     * @Route("/checkdatabase", name="admin_tools_checkdatabase",
     *      options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function checkDatabaseAction()
    {
        $commande = [
            'command' => 'd:s:v',
        ];
        $output = $this->createCommande($commande);
        $this->addFlash('success', $output);

        return $this->render(':admin/tools:checkdatabase.html.twig');
    }

    /**
     * @Route("/manager", name="admin_tools_manager",
     *      options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function managerAction()
    {
        return $this->render(':admin/tools:filemanager.html.twig');
    }


     /**
     * @Route("/newsletters", name="admin_tools_newsletters",
     *      options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function newslettersAction()
    {
        return $this->render(':newsletter:index.html.twig');
    }

    /**
     * @param $commande
     *
     * @return mixed
     */
    private function createCommande($commande)
    {
        $kernel = $this->get('kernel');
        $application = new Application($kernel);
        $application->setAutoExit(false);
        $input = new ArrayInput($commande);
        $output = new BufferedOutput();
        $application->run($input, $output);

        return $output->fetch();
    }
}
