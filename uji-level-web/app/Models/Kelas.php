<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function walas()
    {
        return $this->belongsTo(Walas::class, 'walas_id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id');
    }
}
