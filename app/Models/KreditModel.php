<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreditModel extends Model
{
    use HasFactory;
    protected $table = 'kredit';
    protected $primaryKey = 'ID';
    protected $fillable = ['NO_KREDIT','NAMA','ALAMAT','MARKETING',
    'JUMLAH_PENGAJUAN','JANGKA_WAKTU','JATUH_TEMPO','KETERANGAN','STATUS','LUNAS_BRP','ADMIN'];
}
