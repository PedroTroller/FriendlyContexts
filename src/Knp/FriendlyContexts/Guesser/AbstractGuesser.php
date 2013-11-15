<?php

namespace Knp\FriendlyContexts\Guesser;

use Faker\Provider\Base;

abstract class AbstractGuesser
{
    protected $manager;
    protected $fakers = [];

    public function getManager()
    {
        return $this->manager;
    }

    public function setManager(GuesserManager $manager)
    {
        $this->manager = $manager;

        return $this;
    }

    public function addFaker(Base $faker)
    {
        $this->fakers[] = $faker;
    }

    protected function get($name)
    {
        return $this->getManager()->getContainer()->get($name);
    }
}
