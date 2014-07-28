<?php

use Cydo\PresenterBundle\Tests\Entity\Task;
use Cydo\PresenterBundle\Tests\Entity\EntityWithoutPresenter;

class PresenterFinderTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->task = new Task();
        $this->entityWithoutPresenter = new EntityWithoutPresenter();
    }

    public function testFindsPresenter()
    {
        $this->assertInstanceOf('Cydo\\PresenterBundle\\Tests\\Presenter\\TaskPresenter', $this->task->presenter());
    }

    public function testExceptionIfNoPresenter()
    {
        $this->setExpectedException('Cydo\\PresenterBundle\\Exception\\PresenterNotFoundException');
        $this->entityWithoutPresenter->presenter();
    }
}
