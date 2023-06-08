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
        return $this->hasOne(Kelas::class, 'guru_id');
    }

    public function user()
    {
        return $this->belongsTo (User::class);
    }
}
