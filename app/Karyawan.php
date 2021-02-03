<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawan"; //karyawan adalah nama table yang berada di database.
    protected $fillable = ['kd_pegawai','nama_lengkap','jenis_kelamin','divisi','email']; //field yang boleh diisi secara masal
}
