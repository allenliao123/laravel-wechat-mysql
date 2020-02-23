<?php
/**
 * 文件描述：
 * Created by PhpStorm.
 * User: 36168
 * Date: 2020/2/23
 * Time: 16:07
 */

namespace TinyShop\App\Controllers;


class IndexController
{

    public function index(){

        //注意是双冒号
        return view("tinyshop::index");
    }



}