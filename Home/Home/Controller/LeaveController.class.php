<?php
namespace Home\Controller;
use Think\Controller;
class LeaveController extends Controller {
    public function index(){
        layout("Index/layout");
        $this->display();
    }
}