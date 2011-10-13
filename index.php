<?php
require './application/application.php';

$app->get('/', function() use ($app) {
	return $app->render('index.html', array());
});

$app->run();
