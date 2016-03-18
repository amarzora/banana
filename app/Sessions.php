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
    protected $table = "sessions";


    public function NomCinema()
    {

        /*
         * SELECT c.title
           *FROM `sessions` AS s
       *INNER JOIN cinema AS c ON c.id = s.cinema_id
       *ORDER BY c.title
       *LIMIT 10
         */

        $nextCinema = DB::table('sessions')


            ->join('cinema', 'cinema.id', '=', 'sessions.cinema_id')
            ->select( 'cinema.title','cinema.ville','date_session')
            ->get();
        return $nextCinema;

    }
    /*
        public function cinema()
        {
          return  $this->belongsTo(App\Cinema);


        }
*/
}