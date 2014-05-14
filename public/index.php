<?php
require_once "../vendor/autoload.php";
require_once "../app/config.php";
require_once "../app/helpers.php";
require_once "../app/baseController.php";
require_once "../app/baseModel.php";
require_once "../app/view.php";

$accessed_uri = $_SERVER['REQUEST_URI'];
$accessed_uri = substr($accessed_uri, 1);

$is_root = empty($accessed_uri);

$controllerName = DEFAULT_CONTROLLER;
$methodName = DEFAULT_METHOD;
$parameterName = '';
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

$classDefinitionFile = sprintf('../app/controllers/%sController.php',
  $controllerName);

include $classDefinitionFile;
$r = new ReflectionClass(sprintf('%sController',$controllerName));
$c = $r->newInstance();

if(empty($parameter)){
  $c->{$methodName}();
} else {
  $c->{$methodName}($parameter);
}
