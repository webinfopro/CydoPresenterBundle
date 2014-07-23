CydoPresenterBundle
===================

[![SensioLabs Insight](https://insight.sensiolabs.com/projects/19d8452b-3553-4599-858b-75f3a5a7245b/big.png)](https://travis-ci.org/Cydonia7/CydoPresenterBundl://insight.sensiolabs.com/projects/19d8452b-3553-4599-858b-75f3a5a7245b)

[![Build Status](https://travis-ci.org/Cydonia7/CydoPresenterBundle.svg?branch=master)](https://travis-ci.org/Cydonia7/CydoPresenterBundle)

The CydoPresenterBundle allows you to easily use presenters in your Symfony2 application.
A presenter is a simple class that takes care of the view logic instead of having a model
do the work.

It is useful for separating concerns transparently since presenters proxy methods to the 
model if they are not defined.

You can begin to use it quickly with 4 easy steps.

### Step 1 : Download CydoPresenterBundle using composer

Composer support to be done.

### Step 2 : Enable the bundle

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

### Step 4 : Use the presenters in your views

### Examples
