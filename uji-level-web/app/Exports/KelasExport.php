<?php

namespace App\Exports;

use App\Models\Kelas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KelasExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Kelas::with('walas','guru')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama',
            'walas',
            'guru',
        ];
    }

    public function map($siswa): array
    {
        return [
            $siswa->id,
            $siswa->nama,
            $siswa->walas->nama,
            $siswa->guru->nama,
        ];
    }

}
