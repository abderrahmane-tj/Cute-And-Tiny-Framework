<?php
class view{
  public static function load($_view_file,$_view_data = null){
    if(!empty($_view_data) && gettype($_view_data)=='array'){
      extract($_view_data);
    }
    $pathToFile = '../app/views/'.$_view_file.'.php';
    include $pathToFile;
  }
}