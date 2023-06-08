<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    use HasFactory;

    protected $table = 'walas';

    protected $fillable = [
        'nipd', 'user_id', 'nama', 'ttl', 'jenis_kelamin',  
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'walas_id');
    }


    public function user()
{
    return $this->belongsTo(User::class);
}

}
