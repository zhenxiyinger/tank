<?php

namespace App\Http\Controllers\Admin;

use App\Models\SysUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return View('admin.index.index');
    }

    public function main(){
        return View('admin.index.main');
    }

    public function test(){
        echo 123;
    }
}
