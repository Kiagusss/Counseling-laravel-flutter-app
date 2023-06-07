<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public function siswas()
    {
        return $this->hasMany(Murid::class);
    }

    public function walas()
    {
        return $this->hasOne(Walas::class);
    }

    public function guru()
    {
        return $this->hasOne(Guru::class);
    }
}
