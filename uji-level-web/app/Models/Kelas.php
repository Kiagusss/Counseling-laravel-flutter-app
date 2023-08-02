<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    use HasFactory;

    protected $fillable = [
         'nama', 'guru_id', 'walas_id'  
    ];
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
        return $this->hasMany(Siswa::class);
    }

}
