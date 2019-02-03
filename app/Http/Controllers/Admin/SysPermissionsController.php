<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class SysPermissionsController extends Controller
{
    public function index()
    {
        $dataList = Permission::all();
        $res = array(
            'dataList' => $dataList
        );
        return View('admin.sys_permissions.index', $res);
    }

    public function add(Request $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->only(['name', 'show']);
            $data['guard_name'] = 'admin';
            Permission::create($data);

            return array(200);
        } else {
            return View('admin.sys_permissions.add');
        }
    }
}
