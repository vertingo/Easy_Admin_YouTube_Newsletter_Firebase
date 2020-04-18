<?php

namespace NewslettersBundle\Model\Subscriber;

abstract class SubscriberManager implements SubscriberManagerInterface
{
    protected $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function create()
    {
        return new $this->class();
    }
}
