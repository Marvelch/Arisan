<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "report";
    public $fillabel = [
        'email',
        'subyek',
        'message'
    ];
}
