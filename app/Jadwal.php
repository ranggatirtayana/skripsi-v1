<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal"; //karyawan adalah nama table yang berada di database.
    protected $fillable = ['kd_pegawai','jadwal']; //field yang boleh diisi secara masal
}
