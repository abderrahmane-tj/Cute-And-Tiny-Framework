<?php
class view{
	public $title;
    public $content;
    public $layout;
    function view(){
        $this->content = DEFAULT_CONTROLLER.'/'.DEFAULT_METHOD;
        $this->title = DEFAULT_TITLE;
        $this->layout = DEFAULT_LAYOUT;
    }
  public function load($_view_file,$_view_data = null){
    if(!empty($_view_data) && gettype($_view_data)=='array'){
      extract($_view_data);
    }
    $this->content = ROOT_FOLDER.'/app/views/'.$_view_file.'.php';
    // TODO: Remove $this from the exposed variables
    $layout = $this;
    include ROOT_FOLDER.'/app/views/layouts/'.$this->layout.'/layout.php';
  }
}