<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ],
];
$app = new \Slim\App($config);
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
//Ruta, controlador:método
$app->get('/', 'Ieselcaminas\App\Controllers\PageController:home');
$app->get('/about', 'Ieselcaminas\App\Controllers\PageController:about');
$app->run();