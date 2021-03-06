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
            $data = $request->only(['name', 'show']);
            $data['guard_name'] = 'admin';
            Role::create($data);

            return array(200);
        } else {
            return View('admin.sys_roles.add');
        }
    }
}
