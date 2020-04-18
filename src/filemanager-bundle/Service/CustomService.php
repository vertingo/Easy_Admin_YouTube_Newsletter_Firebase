<?php

namespace FileManagerBundle\Service;

use FileManagerBundle\Service\CustomConfServiceInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class CustomService implements CustomConfServiceInterface
{
    /**
     * @var TokenStorage
     */
    private $tokenStorage;


    /**
     * CustomService constructor.
     * @param TokenStorage $tokenStorage
     */
    public function __construct(TokenStorage $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }


    public function getConf($extra = [])
    {
        $folder = 'user/' . $this->tokenStorage->getToken()->getUser();
        $fs = new Filesystem();
        if (!$fs->exists($folder)) {
            $fs->mkdir($folder);
        }
        return ['dir' => $folder];

    }

    

}