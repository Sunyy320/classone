<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function index(){
        layout("Index/layout");
        $this->display();
    }
}