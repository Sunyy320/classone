<?php
namespace Home\Controller;
use Think\Controller;
class TongxlController extends Controller {
    public function index(){
        layout("Index/layout");
        $this->display();
    }
}