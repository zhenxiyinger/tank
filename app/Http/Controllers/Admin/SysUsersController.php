<?php

namespace App\Http\Controllers\Admin;

use App\Models\SysUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SysUsersController extends Controller
{
    public function index()
    {
        $dataList = SysUsers::all();
        $res = array(
            'dataList' => $dataList
        );
        return View('admin.sys_users.index', $res);
    }

    public function add(Request $request)
    {
        if($request->method() == 'POST'){
            $params = $request->input();
            $sysUsers = new SysUsers;
            $sysUsers->username = $params['username'];
            $sysUsers->password = bcrypt($params['password']);
            $sysUsers->name = $params['name'];
            $sysUsers->mobile = $params['mobile'];
            $sysUsers->ip = $request->getClientIp();
            $sysUsers->status = 1;
            $sysUsers->save();

            return array(200);
        }else{
            return View('admin.sys_users.add');
        }
    }

    public function edit(Request $request)
    {
        if($request->method() == 'POST'){
            dump($request->input());
        }else{
            return View('admin.sys_users.add');
        }
    }

    public function del(Request $request)
    {
        $id = dump($request->input('id'));
        SysUsers::where('id', $id)->delete();
    }
}
