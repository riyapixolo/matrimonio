<?php

$base_path=__DIR__ . '/../../';
require_once $base_path.'vendor/autoload.php'; 
$loader = new \Twig\Loader\FilesystemLoader($base_path.'application/templates'); // Load the template folder for twig to render
$twig = new \Twig\Environment($loader, [
    // 'cache' => $base_path.'application/cache', // Optional
]);

?>