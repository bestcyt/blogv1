<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table = 'posts';


    public $timestamps = true;

    protected $connection = 'mysql';
}
