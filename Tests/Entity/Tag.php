<?php

namespace Cydo\PresenterBundle\Tests\Entity;

class Tag
{
    protected $name;
    protected $progress;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setProgress($progress) {
        $this->progress = $progress;
    }

    public function getProgress() {
        return $this->progress;
    }
}
