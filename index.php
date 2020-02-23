<?php
/**
 * 文件描述：
 * Created by PhpStorm.
 * User: 36168
 * Date: 2020/2/23
 * Time: 16:06
 */

require "./vendor/autoload.php";
use TinyShop\App\Controller\IndexController;


$c = new IndexController();

$c->index();
