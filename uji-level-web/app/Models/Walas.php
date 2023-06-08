<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    use HasFactory;

    protected $table = 'walas';

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'walas_id');
    }


    public function user()
{
    return $this->belongsTo(User::class);
}

}
