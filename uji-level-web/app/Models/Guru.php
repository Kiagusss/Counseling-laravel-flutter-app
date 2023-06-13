<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'user_id', 'nama', 'nipd', 'ttl', 'jenis_kelamin'  
    ];

   
    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }
    public function kelass()
    {
        return $this->hasMany(Kelas::class);
    }


    public function walas()
    {
        return $this->hasOne(Kelas::class, 'walas_id');
    }

    public function user()
    {
        return $this->belongsTo (User::class);
    }

    public function konseling(){
        return $this->hasOne(KonselingBK::class, 'guru_id', 'id');
    }

    public function walasKelas()
    {
        return $this->hasMany(Kelas::class, 'walas_id');
    }
}
