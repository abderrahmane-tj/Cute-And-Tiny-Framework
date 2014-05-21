<?php
use Illuminate\Database\Capsule\Manager as Capsule;

define('ROOT_FOLDER',dirname(dirname(__FILE__)));

$capsule = new Capsule;
$capsule->addConnection(array(
	'driver'    => 'mysql',
	'host'      => DB_HOST,
	'database'  => DB_NAME,
	'username'  => DB_USERNAME,
	'password'  => DB_PASSWORD,
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
));

$capsule->setAsGlobal();
$capsule->bootEloquent();

function do_autoload($class_name){
  $pathToFile = ROOT_FOLDER.'/app/models/'.$class_name.'.php';
  if(file_exists($pathToFile)){
    include_once $pathToFile;
  }
}

spl_autoload_register('do_autoload');

