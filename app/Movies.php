<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 11:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movies
 * Modelise toutes mes requettes
 * concernant la table Movies
 * @package App
 */


class Movies extends  Model
{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = "movies";

}