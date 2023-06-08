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
        return $this->hasOne(Kelas::class);
    }

    public function petaKerawanan()
    {
        return $this->hasMany(PetaKerawanan::class);
    }


    public function user()
{
    return $this->belongsTo(User::class);
}
public function guru()
{
    return $this->belongsTo(Guru::class, 'guru_id');
}


}
