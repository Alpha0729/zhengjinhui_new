<?php
namespace app\index\controller;

use think\View;
use think\Controller;

class Html extends Controller
{
    public function add()
    {
        return $this->fetch();
    }
    public function fund()  /*私募基金*/
    {
        return view();
    }
}
