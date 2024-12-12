<?php

require __DIR__ . '/../vendor/autoload.php';

use FrameworkX\App;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Set up the Twig template loader
$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig = new Environment($loader);

$app = new App();

$app->get('/', function (ServerRequestInterface $request) use ($twig) {
    // Render the HTML from Twig
    $html = $twig->render('index.html.twig', []);

    // Return an HTML response containing the rendered HTML
    return new HtmlResponse($html);
});

$app->post('/login', function (ServerRequestInterface $request) use ($twig) {
    // Render the HTML from Twig
    $html = $twig->render('index.html.twig', []);

    // Return an HTML response containing the rendered HTML
    return new HtmlResponse($html);
});

$app->run();