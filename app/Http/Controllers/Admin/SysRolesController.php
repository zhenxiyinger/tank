<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class SysRolesController extends Controller
{
    public function index()
    {
        $dataList = Role::all();
        $res = array(
            'dataList' => $dataList
        );
        return View('admin.sys_roles.index', $res);
    }

    public function add(Request $request)
    {
        if ($request->method() == 'POST') {
            Role::create(['show' => 'aa', 'name' => 'bb', 'guard_name' => 'admin']);

            return array(200);
        } else {
            return View('admin.sys_roles.add');
        }
    }

    public function edit(Request $request)
    {
        if ($request->method() == 'POST') {
            dump($request->input());
        } else {
            return View('admin.sys_roles.add');
        }
    }

    public function del(Request $request)
    {
        $id = dump($request->input('id'));
        SysUsers::where('id', $id)->delete();
    }
}
