<?php

class baseController{
	protected $noOutput = false;
	protected $view;
	function baseController(){
		$this->view = new view();
	}
}