<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataPegawai extends Model
{
    use HasFactory;
    protected $table = 'data_pegawai';
    protected $filable = [
        'nip',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'jabatan_id',
        'tanggal_bergabung'
    ];
    public function jabatan()
    {
        return $this->belongsTo(jabatan::class, 'jabatan_id', 'id');
    }
 
}
