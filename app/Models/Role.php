<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Contracts\Role as RoleContract;

class Role extends \Spatie\Permission\Models\Role
{
    public $incrementing=false;
    protected $primaryKey='id';
    protected $guarded=[];
}
