<?php

use Cydo\PresenterBundle\Tests\Entity\Task;
use Cydo\PresenterBundle\Tests\Presenter\TaskPresenter;

class PresenterTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->task = new Task();
        $this->task->setProgress(20);
        $this->task->setName('Task');

        $this->taskPresenter = new TaskPresenter($this->task);
    }

    public function testModelOnlyMethod()
    {
        $this->assertEquals('Task', $this->taskPresenter->getName());
    }

    public function testNonExistentMethod()
    {
        $this->setExpectedException('Cydo\\PresenterBundle\\Exception\\MethodNotFoundException');
        $this->taskPresenter->getDescription();
    }

    public function testPresenterAndModelMethod()
    {
        $this->assertEquals('20 %', $this->taskPresenter->getProgress());
    }

    public function testPresenterOnlyMethod()
    {
        $this->assertEquals('<progress value="20" max="100"></progress>', $this->taskPresenter->getProgressBar());
    }
}
