<?php
require 'library/Slim/Slim.php';
require 'library/Views/TwigView.php';
require 'library/Paris/idiorm.php';
require 'library/Paris/paris.php';


// Configuration
TwigView::$twigDirectory = 'library/Twig/lib/Twig';
ORM::configure('mysql:host=<HOST>;dbname=<DBNAME>');
ORM::configure('username', '<USER>');
ORM::configure('password', '<PASSWORD>');

// Start Slim.
$app = new Slim(array(
	'view'           => new TwigView,
	'templates.path' => __DIR__ . '/views'
));

