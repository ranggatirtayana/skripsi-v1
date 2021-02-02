<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    //
    protected $table = "peserta"; //peserta adalah nama table yang berada di database.
    protected $fillable = ['nis','nama_lengkap','kelas','alamat']; //field yang boleh diisi secara masal
}
