<?php

namespace App\Exports;

use App\Models\pemesanan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

use function PHPSTORM_META\map;

class PemesananExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return pemesanan::with('kendaraan');
    }
    public function map($pemesanan): array
    {
        return [
           $pemesanan->pemesan,
           $pemesanan->kendaraan->nama,
           $pemesanan->kendaraan->jenis_kendaraan,
           $pemesanan->kendaraan->nomor_plat,
           $pemesanan->status
           
        ];
    }
    public function headings(): array
    {
        return [
            'Pemesan',
            'Nama Kendaraan',
            'Jenis Kendaraan',
            'Nomor Plat',
            'Status',
        ];
    }
}
