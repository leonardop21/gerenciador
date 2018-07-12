<?php 

require __DIR__ . "/vendor/autoload.php";

$router = new LEO\Framework\Router;

$router->add('GET', '/', function(){
	return 'home page';
});

$router->add('GET', '/projects/(\d+)', function($params){
	return 'projeto id: ' . $params[1];
});	

try{
	echo $router->run();
} catch (\LEO\Framework\Exceptions\HttpException $e) {
	echo $e->getMessage();	
}
