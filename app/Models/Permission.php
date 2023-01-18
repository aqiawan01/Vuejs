<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    //
    protected $primaryKey='id';
    public $incrementing=false;
    protected $guarded=[];
}
