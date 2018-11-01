<?php
namespace app\index\controller;
use think\View;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $cat = input('nav_cat');

        $this->assign("cat",$cat);
        return $this->fetch();
    }
}
