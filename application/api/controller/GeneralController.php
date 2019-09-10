<?php

/**
 * Created by PhpStorm.
 * User: jaben
 * Date: 2019/9/10
 * Time: 22:05
 */

namespace app\api\controller;

use think\Controller;
use think\Request;

class GeneralController {
    public function sayHi() {
        return "hello world";
    }

}