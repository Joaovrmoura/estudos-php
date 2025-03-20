<?php 


$routes = [
    'POST' => [],
    'GET' => []
];

$uri = 'sou uma uri e aqui é o meu methodo =>';
$controller = 'listar';

$routes['GET'][$uri] = $controller;

var_dump($routes);