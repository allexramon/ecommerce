<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new \Slim\Slim();

$app->config('debug', true);

//rota usuário comum
$app->get('/', function() {
  	
	$page= new Page();
	$page->setTpl("index");	
	
});

//rota usuário adm
$app->get('/admin', function() {
  	
	$page= new PageAdmin();
	$page->setTpl("index");	
	
});

$app->run();

 ?>