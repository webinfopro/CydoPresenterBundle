<?php

namespace Cydo\PresenterBundle\Tests\Entity;

use Cydo\PresenterBundle\Presenter\PresentableTrait;

class Task
{
    use PresentableTrait;

    protected $name;
    protected $progress;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    public function getProgress()
    {
        return $this->progress;
    }
}
