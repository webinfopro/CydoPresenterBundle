
<?php

use Cydo\PresenterBundle\Tests\Entity\Task;
use Cydo\PresenterBundle\Tests\Presenter\TaskPresenter;

class PresenterFinderTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->task = new Task();
    }

    public function testFindsPresenter()
    {
        $this->assertInstanceOf('Cydo\\PresenterBundle\\Tests\\Presenter\\TaskPresenter', $this->task->presenter());
    }
}
