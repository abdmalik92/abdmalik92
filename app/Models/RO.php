<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RO extends Model
{
    protected $table = 'ro_table';

    protected $fillable = [
        'tajuk_permohonan',
        'jarak_BKIL',
        'DT_mula',
        'DT_akhir',
        'tempoh',
        'kos',
        'kod_kerja',
        'no_rujukan',
        'unique_id',
        'ID_PIC',
        'status_kecil',
        'status_besar'
    ];
}
