<?php

$app->get('/', function($request, $response, $args) {
    return $this->view->render($response, 'home.html.twig');
});

$app->get('/contact', function($request, $response, $args) {
    return $this->view->render($response, 'contact.html.twig');
});

$app->get('/{notfound}', function($request, $response, $args) {
    return 'This page does not exist.';
});
