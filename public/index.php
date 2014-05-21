<?php
require_once "../vendor/autoload.php";
require_once "../app/config.php";
require_once "../app/database.php";
require_once "../system/bootstrap.php";
require_once "../system/helpers.php";
require_once "../system/baseModel.php";
if(USE_MIGRATIONS){
	require_once "../app/migrations.php";
}
require_once "../system/baseController.php";
require_once "../app/controllers/pageController.php";
require_once "../system/view.php";

$accessed_uri = $_SERVER['REQUEST_URI'];
$accessed_uri = substr($accessed_uri, 1);

$is_root = empty($accessed_uri);

$controllerName = DEFAULT_CONTROLLER;
$methodName = DEFAULT_METHOD;
$parameterName = '';
$partsCount = 0;
$uriParts = array();
if(!$is_root){
  $uriParts = explode('/', $accessed_uri,3);
  $partsCount = count($uriParts);
  if($partsCount >= 1){
    $controllerName = $uriParts[0];
  }
  if($partsCount >= 2){
    $methodName = $uriParts[1];
  }
  if($partsCount == 3){
    $parameter = $uriParts[2];
  }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $methodName = 'post_'.$methodName;
}
// instead of using page/contact
$pages = new pageController();
if($partsCount == 1 && method_exists($pages,$controllerName)){
  $pages->{$controllerName}();
  exit;
}

$controllerFile = sprintf('../app/controllers/%sController.php', $controllerName);
if(file_exists($controllerFile)){
  require_once $controllerFile;
}else{
  echo '404'; exit;
}

$r = new ReflectionClass(sprintf('%sController',$controllerName));
$c = $r->newInstance();

if(empty($parameter)){
  $c->{$methodName}();
} else {
  $c->{$methodName}($parameter);
}