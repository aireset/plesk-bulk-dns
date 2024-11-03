<?php

require_once dirname(__DIR__) . '/plib/controllers/IndexController.php';

// Inicializa o controlador principal
$controller = new IndexController();
$controller->handleRequest();
