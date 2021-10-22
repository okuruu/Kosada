<?php

namespace App\Exports;

use App\Models\KreditModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;

class BRIExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KreditModel::where('MARKETING','SAB/BRI')->where('STATUS','Yes')->get(['NAMA','ALAMAT','MARKETING','JUMLAH_PENGAJUAN',"KASBON",'LUNAS_BRP','JANGKA_WAKTU','ADMIN','CREATED_AT']);
    }

    public function headings(): array
    {
        return ["Nama","Alamat","Data Marketing","Nominal Pengajuan","Kasbon","Total Lunas","Total Pinjaman","Biaya Admin","Tanggal Pinjaman"];
    }
}
