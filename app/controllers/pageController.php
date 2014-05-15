<?php

class pageController extends baseController{
	public function index(){
		$user = Users::find(1);

		$this->view->title = 'Hi';
		$this->view->load('page/index',array(
			'user' => $user
		));
	}
}