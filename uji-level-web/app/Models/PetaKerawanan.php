<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetaKerawanan extends Model
{
    use HasFactory;

    protected $table = 'peta_kerawanans';
    protected $fillable = [
        'walas_id','siswa_id','jenis_kerawanan' , 'kesimpulan'
    ];



    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function walas()
    {
        return $this->belongsTo(Walas::class);
    }
}