<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        $res = [
            'cash_url'=>'http://47.104.232.195:21111/credit/web'
        ] ;
        return View('web.test.index', $res);
    }
}
