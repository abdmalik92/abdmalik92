<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';

    protected $fillable = [
        'nama',
        'nama_pengguna',
        'alamat',
        'poskod',
        'no_ic',
        'no_telefon',
        'emel',
        'roles',
        'user_pic',
        'login_id',
        'daerah_id',
        'negeri_id',
        'nama_syarikat',
        'no_ssm',
        'url_lampiran'
    ];
}
