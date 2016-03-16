<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 13:55
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actors extends Model
{
    public function getNbActeur(){

        $nbActors = DB::table('actors')
            ->count();
        return $nbActors;
    }

    public function getNbActeurFrance(){
        $nbActorsF = DB::table('actors')
            ->where('nationality','France')
            ->count();
        return $nbActorsF;
    }

    public function moyAgeActors(){
        $moyAge = DB::table('actors')
        ->avg(DB::raw ('TIMESTAMPDIFF(YEAR,dob,NOW())'));

        return ROUND($moyAge);

    }


}