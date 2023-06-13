<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotBK extends Model
{
    use HasFactory;

    protected $table = 'pivot_bk';

    protected $fillable = [
        'siswa_id',
        'konseling_id'
    ];

   
    public function siswas()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function konseling()
    {
        return $this->belongsTo(KonselingBK::class, 'konseling_id');
    }
}
