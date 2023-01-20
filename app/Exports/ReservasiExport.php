<?php

namespace App\Exports;

use App\Models\Reservasi;
use Maatwebsite\Excel\Concerns\FromArray;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReservasiExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Reservasi::all();
    // }
    
    public function array(): array
    {
        $reservasis = Reservasi::with('kamar')->get();
        $reservasis = $reservasis->toArray();
        $datareservasis = array();

        for($i=0; $i<count($reservasis); $i++)
        {
            $datareservasis[$i]['id'] = $reservasis[$i]['id'];
            $datareservasis[$i]['tgl_masuk'] = $reservasis[$i]['tgl_masuk'];
            $datareservasis[$i]['tgl_keluar'] = $reservasis[$i]['tgl_keluar'];
            $datareservasis[$i]['tgl_keluar'] = $reservasis[$i]['tgl_keluar'];
            // $datareservasis[$i]['status'] = ($reservasis[$i]['status'] == 1)? 'AKTIF' : 'TIDAK AKTIF';
            $datareservasis[$i]['kamar_id'] = $reservasis[$i]['kamar_id'];
            $datareservasis[$i]['tamu_id'] = $reservasis[$i]['tamu_id'];
            // $datareservasis[$i]['total_pembayaran'] = $reservasis[$i]['total_pembayaran'];
            
        }

        return $datareservasis;
    }

    public function headings(): array{
        return[
            
           ' Kode Reservasi',
            'Check-in',
            'Check-out',
            'No Kamar',
            'Nama Tamu',
            'Total Bayar',
            'Admin/Karyawan'
        ];
    }

}
