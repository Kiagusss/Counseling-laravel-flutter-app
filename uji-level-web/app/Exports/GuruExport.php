<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GuruExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Guru::with('kelas')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama',
            'nipd',
            'ttl',
            'jenis_kelamin',
            'Kelas',
        ];
    }

    public function map($siswa): array
    {
        return [
            $siswa->id,
            $siswa->nama,
            $siswa->nipd,
            $siswa->ttl,
            $siswa->jenis_kelamin,
            $siswa->kelas->nama,
        ];
    }

}
