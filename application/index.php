<?php

require_once('connection.php');
require_once __DIR__ . '/routes.php';

// Default index page
router('GET', '^/$', function()
{
//    echo '<a href="users">List users</a><br>';
    include_once 'views/calculation.php';
});

// GET request to /users
router('POST', '^/calculate/$', function()
{
    include_once 'controllers/calculatorHandler.php';
});

// With named parameters
router('GET', '^/users/(?<id>\d+)$', function($params)
{
    echo "You selected User-ID: ";
    var_dump($params);
});

// POST request to /users
router('POST', '^/users$', function()
{
    header('Content-Type: application/json');
    $json = json_decode(file_get_contents('php://input'), true);
    echo json_encode(['result' => 1]);
});

header("HTTP/1.0 404 Not Found");
echo '404 Not Found..';
