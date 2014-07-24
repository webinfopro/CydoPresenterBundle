CydoPresenterBundle
===================

[![SensioLabs Insight](https://insight.sensiolabs.com/projects/19d8452b-3553-4599-858b-75f3a5a7245b/big.png)](https://insight.sensiolabs.com/projects/19d8452b-3553-4599-858b-75f3a5a7245b)

[![Build Status](https://travis-ci.org/Cydonia7/CydoPresenterBundle.svg?branch=master)](https://travis-ci.org/Cydonia7/CydoPresenterBundle)

The CydoPresenterBundle allows you to easily use presenters in your Symfony2 application.
A presenter is a simple class that takes care of the view logic instead of having a model
do the work.

It is useful for separating concerns transparently since presenters proxy methods to the 
model if they are not defined.

You can begin to use it quickly with 4 easy steps.

### Step 1 : Download CydoPresenterBundle using composer

You can add the bundle to your project using the following command :
```
php composer.phar require cydo/presenter-bundle dev-master
```

It will install the bundle in the `vendor/cydo` directory of your project.

### Step 2 : Enable the bundle

To enable the bundle, you have to register it in your application kernel like this :

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Cydo\PresenterBundle\CydoPresenterBundle(),
    );
}
```

### Step 3 : Create a presenter

You can create a presenter for your model (or another object class). Here's an example code for a 
presenter associated with a basic Task model (with attributes name and progress).

``` php
<?php
// src/Acme/DemoBundle/Presenter/TaskPresenter.php

use Cydo\PresenterBundle\Presenter\BasePresenter;

class TaskPresenter extends BasePresenter
{
    public function getDisplayName()
    {
        return $this->object->getName() . ' (' . $this->object->getProgress() . ' %)';
    }
}
```

### Step 4 : Use the presenters in your views

To use the presenter in your views, you just have to pass `new TaskPresenter($task)` to your view instead of just `$task`.

You can define a simple method `presenter()` in your model that returns a `TaskPresenter` associated to the current instance.
It is also possible to use the `PresenterTrait` included in the bundle that will implement this method provided it finds the associated presenter.

For instance, if your model is `Acme\DemoBundle\Entity\Task`, the autoloaded presenter would be `Acme\DemoBundle\Presenter\TaskPresenter`.

You do not have to change your previous template code since all the methods you don't redefine in the presenter are handled by the model automatically.

For instance, with the presenter defined above you can do things like

```twig
{{ task.name }} ({{ task.progress }} %)
is equivalent to
{{ task.displayName }}
```

### Step 5 : Advanced use

Sometimes you want some attribute of your model to stay the same in the code and always appear in another way in the views.

Imagine you have a model with a money attribute, you want your model's `getMoney()` to return a floating number but you would like 
your view to display it like $ 9.45.

You can do that by creating a `getMoney()` method in your presenter. The model will still have its getter return the floating number 
while the presenter will return you the money formatted as you like when you do in Twig `{{ object.money }}`.
