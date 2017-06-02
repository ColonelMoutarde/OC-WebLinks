<?php

// Home page
$app->get('/', "WebLinks\Controller\HomeController::indexAction" )->bind('home');

$app->get('/', "WebLinks\Controller\AdminController::indexAction" )->bind('admin');
