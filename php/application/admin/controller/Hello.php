<?php


namespace app\admin\controller;

use think\Request;
use think\Db;
use app\common\adapter\AuthAdapter;
use app\common\controller\Common;


class Hello extends Common
{
    public function  index()
    {

        echo "Hello Vuethink";
    }
}