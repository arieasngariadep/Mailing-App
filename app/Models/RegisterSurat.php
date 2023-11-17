<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RegisterSurat extends Model
{
    protected $table = "register_surat";
    protected $primarykey = "id";
    protected $fillable = [
        'tgl_masuk', 'jenis_surat', 'no_surat', 'tgl_surat', 'tgl_disposisi_gm', 'disposisi_untuk', 'perihal', 'posisi_surat', 'tgl_disposisi_pimkel', 'disposisi_untuk2', 'keterangan'
    ];

    public function getRegisterSurat($tanggal_masuk, $tanggal_masuk1, $tanggal_surat, $tanggal_surat1)
    {
        $user = new Pegawai;
        $query = $user->select();

        if($tanggal_masuk != NULL && $tanggal_masuk1 != NULL){
            $query->whereBetween('tanggal_masuk', [$tanggal_masuk, $tanggal_masuk1]);
        }

        if($tanggal_surat != NULL && $tanggal_surat1 != NULL){
            $query->whereBetween('tanggal_surat', [$tanggal_surat, $tanggal_surat1]);
        }

        $data = $query->get();
        return $data;
    }

    // Segment Dashbaord
    public function getDataNotin()
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        $surat = new RegisterSurat;
        $data = $surat->select('*')
        ->where('jenis_surat', 'NOTIN')
        ->whereMonth('tgl_masuk', $month)
        ->whereYear('tgl_masuk', $year)
        ->count();
        return $data;
    }
    public function getDataMemo()
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        $surat = new RegisterSurat;
        $data = $surat->select('*')
        ->where('jenis_surat', 'MEMO')
        ->whereMonth('tgl_masuk', $month)
        ->whereYear('tgl_masuk', $year)
        ->count();
        return $data;
    }
    public function getDataSurat()
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        $surat = new RegisterSurat;
        $data = $surat->select('*')
        ->where('jenis_surat', 'SURAT')
        ->whereMonth('tgl_masuk', $month)
        ->whereYear('tgl_masuk', $year)
        ->count();
        return $data;
    }
}
