<?php

namespace Cydo\PresenterBundle\Presenter;

use Cydo\PresenterBundle\Exception\MethodNotFoundException;

class BasePresenter
{
    protected $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    public function __call($methodName, $arguments)
    {
        $methods = get_class_methods($this->object);

        if (in_array($methodName, $methods))
        {
            return call_user_func_array(array($this->object, $methodName), $arguments);
        }
        else
        {
            throw new MethodNotFoundException('No such method ' . $methodName . ' neither in the object nor in the presenter.');
        }
    }
}
