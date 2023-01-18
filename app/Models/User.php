<?php

namespace App\Models;

use App\Classes\Helper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Http\Resources\Frontend\Customer\GetProfile as GetUserProfile;
use File;

class User extends Authenticatable
{
    use HasRoles, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function signIn(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name' => ['required', 'string','max:255'],
            'email' => ['required', 'string','email','max:255', 'unique:users'],
            'password' => ['required', 'string','confirmed'],
        ]);


        if ($validator->fails()) {
            return $validator->errors();
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'image' => '/uploads/user/default.png',
            'password' => bcrypt($request->password),
            $this->assignRole(2)
        ];

        $this->fill($data);
        $this->save();

        return $this;
    }


}
