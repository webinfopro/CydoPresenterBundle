<?php

namespace Cydo\PresenterBundle\Tests\Presenter;

use Cydo\PresenterBundle\Presenter\BasePresenter;

class TaskPresenter extends BasePresenter
{
    public function getProgress()
    {
        return $this->object->getProgress() . ' %';
    }

    public function getProgressbar()
    {
        return '<progress value="' . $this->object->getProgress() . '" max="100"></progress>';
    }
}
