<?php

namespace Cydo\PresenterBundle\Presenter;

use Cydo\PresenterBundle\Exception\PresenterNotFoundException;

trait PresentableTrait
{
    public function presenter()
    {
        $class = $this->getPresenterClass();
        return new $class($this);
    }

    protected function getPresenterClass()
    {
        $class = $this->getPresenterClassName();

        if (!class_exists($class))
        {
            throw new PresenterNotFoundException('Unable to automatically find the presenter class associated to this object.');
        }

        return $class;
    }

    protected function getPresenterClassName()
    {
        static $class;

        if (is_null($class))
        {
            $pathToClass = explode('\\', get_class($this));
            $numParts = count($pathToClass);

            if ($numParts >= 2)
            {
                $pathToClass[$numParts - 1] .= 'Presenter';
                $pathToClass[$numParts - 2] = 'Presenter';
                $class = implode('\\', $pathToClass);
            }
        }

        return $class;
    }
}
