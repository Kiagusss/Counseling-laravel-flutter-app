<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';

    protected $fillable = [
        'user_id', 'nama', 'nisn', 'ttl', 'jenis_kelamin','kelas_id',  
    ];

    public function kelasid(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function petaKerawanan()
    {
        return $this->hasMany(PetaKerawanan::class);
    }


    public function konseling()
    {
        return $this->belongsToMany(KonselingBK::class, 'pivot_bk', 'siswa_id', 'konseling_id');
    }
    
}
