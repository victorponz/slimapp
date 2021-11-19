<?php
namespace Ieselcaminas\App\Controllers;

use Psr\Container\ContainerInterface;
class PageController{
    protected $controller;

    public function __construct(ContainerInterface $controller)
    {
        $this->controller = $controller;
    }

    public function home($request, $response, $args)
    {
        $response->getBody()->Write("Hello world");
        return $response;
    }

    public function about($request, $response, $args)
    {
        $response->getBody()->Write("Acerca de ");
        return $response;
    }
}