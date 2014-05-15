<?php

class pageController extends baseController{
	public function index(){
		$user = Users::find(1);

		view::load('page/index',array(
			'user' => $user
		));
	}
}