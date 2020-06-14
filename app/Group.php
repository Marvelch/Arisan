<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "group";
    protected $fillable = [
        'groups_name',
        'biaya',
        'jumlah_peserta',
        'total_hadiah',
        'users_id',
        'status',
        'tanggal_mulai',
        'rentan_waktu_pengocokan',
        'waktu_pengocokan'
    ];   

    // protected $table = "group";
}
