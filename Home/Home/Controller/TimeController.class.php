<?php
namespace Home\Controller;
use Think\Controller;
class TimeController extends Controller {
    public function index(){

        //通过这种方法来控制模板布局
        layout("Index/layout");
        $this->display();
    }
}