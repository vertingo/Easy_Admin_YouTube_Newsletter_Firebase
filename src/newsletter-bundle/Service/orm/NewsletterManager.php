<?php
namespace NewslettersBundle\Service\orm;

use Doctrine\Common\Persistence\ObjectRepository;

use NewslettersBundle\Model\Newsletter\NewsletterManager as BaseNewsletterManager;

class NewsletterManager extends BaseNewsletterManager
{
    protected $repository;

    public function __construct(ObjectRepository $repository)
    {
        $this->repository = $repository;
        parent::__construct($repository->getClassName());
    }

    public function get($id)
    {
        return $this->repository->find($id);
    }

    public function findBy(array $criteria, array $orderBy = array(), $limit = null, $offset = null)
    {
        return $this->repository->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }

    public function getByHash($hash)
    {
        return $this->repository->findOneBy(array(
            'hash' => $hash
        ));
    }

}
