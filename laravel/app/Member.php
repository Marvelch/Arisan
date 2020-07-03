<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $table = "members";

    public $fillable = [
        'id',
        'nama',
        'email',
        'telpon',
        'status_arisan'
    ];
}
