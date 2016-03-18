<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function affiche()
    {

        $profilUser = DB::table('user')
        ->select( 'username','avatar','ville')
         ->orderBy ('last_login')
            ->limit (12)
        ->get();
        return $profilUser;


    }



}
