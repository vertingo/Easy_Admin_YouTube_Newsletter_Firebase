<?php

namespace FileManagerBundle\Twig;

use FileManagerBundle\Helpers\FileManager;
use Symfony\Component\Routing\Router;

class OrderExtension extends \Twig_Extension
{
    const ASC = 'asc';
    const DESC = 'desc';

    /**
     * @var Router
     */
    private $router;

    /**
     * OrderExtension constructor.
     *
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function order(\Twig_Environment $environment, FileManager $fileManager, $type)
    {
        $order = self::ASC === $fileManager->getQueryParameter('order');
        $active = $fileManager->getQueryParameter('orderby') === $type ? 'actived' : null;
        $orderBy = [];
        $orderBy['orderby'] = $type;
        $orderBy['order'] = $active ? ($order ? self::DESC : self::ASC) : self::ASC;
        $parameters = array_merge($fileManager->getQueryParameters(), $orderBy);

        $glyphicon = $active ? '-'.($order ? self::ASC : self::DESC) : '';

        $href = $this->router->generate('file_manager', $parameters);

        return $environment->render('@FileManager/extension/_order.html.twig', [
            'active' => $active,
            'href' => $href,
            'glyphicon' => $glyphicon,
            'type' => $type,
            'islist' => 'list' === $fileManager->getView(),
        ]);
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            'order' => new \Twig_SimpleFunction('order', [$this, 'order'], ['needs_environment' => true, 'is_safe' => ['html']]),
        ];
    }
}
