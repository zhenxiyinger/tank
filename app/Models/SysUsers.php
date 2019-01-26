<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class SysUsers extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasRoles;

    protected $guard_name = 'admin';
}
