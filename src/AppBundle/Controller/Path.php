<?php

// app/config/routing.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

// load some routes - one should ultimately have the path "/app"
$appRoutes = $loader->import("@AppBundle/Controller/", "annotation");
$appRoutes->setPrefix('/genus/Caracatita');

$collection->addCollection($appRoutes);

// redirecting the root
$collection->add('root', new Route('/', array(
    '_controller' => 'FrameworkBundle:Redirect:urlRedirect',
    'path'        => '/genus/Caracatita',
    'permanent'   => true,
)));

return $collection;