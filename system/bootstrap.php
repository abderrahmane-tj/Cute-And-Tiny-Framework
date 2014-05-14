<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use \Illuminate\Database\Schema\Blueprint;

define('ROOT_FOLDER',dirname(dirname(__FILE__)));

$capsule = new Capsule;
$capsule->addConnection(array(
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'pfe',
	'username'  => 'root',
	'password'  => 'root',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
));

$capsule->setAsGlobal();
$capsule->bootEloquent();

function do_autoload($class_name){
	include_once ROOT_FOLDER.'/app/models/'.$class_name.'.php';
}

spl_autoload_register('do_autoload');

