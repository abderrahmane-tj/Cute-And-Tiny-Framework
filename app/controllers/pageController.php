<?php

class pageController extends baseController{
    function index(){
        $this->view->title = 'Welcome';
        $this->view->load('page/index');
    }
}