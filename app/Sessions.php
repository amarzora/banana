<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 16/03/16
 * Time: 10:01
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sessions extends Model
{
    protected $table = "movies";


    public function NomCinema()
    {

        /*
         * SELECT c.title
           *FROM `sessions` AS s
       *INNER JOIN cinema AS c ON c.id = s.cinema_id
       *ORDER BY c.title
       *LIMIT 10
         */

        $titleCinema = DB::table('sessions')
            ->join('cinema', 'cinema.id', '=', 'sessions.cinema_id')
            ->select('sessions.id', 'cinema.title')
            ->select('sessions.id','cinema.ville')
            ->select('sessions.id','sessions.date_session')
            ->get();
        return $titleCinema;


    }
    /*
        public function cinema()
        {
          return  $this->belongsTo(App\Cinema);


        }
*/
}