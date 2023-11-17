<?php

namespace App\Imports;

use App\Models\RegisterSurat;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

class RegisterImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }

    public function model(array $row)
    {
        date_default_timezone_set("Asia/Jakarta");
        return new RegisterSurat([
            'tgl_masuk' => ($row['tgl_masuk'] == null ? null : $this->transformDate($row['tgl_masuk'])),
            'jenis_surat' => $row['jenis_surat'],
            'no_surat' => $row['no_surat'],
            'tgl_surat' => ($row['tgl_surat'] == null ? null : $this->transformDate($row['tgl_surat'])),
            'tgl_disposisi_gm' => ($row['tgl_disposisi_gm'] == null ? null : $this->transformDate($row['tgl_disposisi_gm'])),
            'disposisi_untuk' => $row['disposisi_untuk'],
            'perihal' => $row['perihal'],
            'posisi_surat' => $row['posisi_surat'],
            'tgl_disposisi_pimkel' => ($row['tgl_disposisi_gm'] == null ? null : $this->transformDate($row['tgl_disposisi_gm'])),
            'disposisi_untuk2' => $row['disposisi_untuk2'],
            'keterangan' => $row['keterangan'],

        ]);
    }
}
