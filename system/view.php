<?php
class view{
	public $title = 'DEFAULT_TITLE';
	public $content = 'DEFAULT_CONTENT';

  public function load($_view_file,$_view_data = null){
    if(!empty($_view_data) && gettype($_view_data)=='array'){
      extract($_view_data);
    }
    $this->content = ROOT_FOLDER.'/app/views/'.$_view_file.'.php';
		$layout = $this;
		include ROOT_FOLDER.'/app/views/layouts/'.DEFAULT_LAYOUT.'/layout.php';
  }
}