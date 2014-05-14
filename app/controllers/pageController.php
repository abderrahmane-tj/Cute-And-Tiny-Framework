<?php

class pageController extends baseController{
	public function index(){
    view::load('page/index',array(
      'user' => 'abderrahmane',
      'title' => 'lol'
    ));
	}
}