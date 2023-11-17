<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primarykey = "id";
    protected $fillable = [
        'npp', 'nama', 'tanggal_masuk', 'divisi', 'kelompok',
    ];
    public function deleteUser($id)
    {
        $user = new Pegawai;
        $user->where('id', $id)->delete();
    }
    use HasFactory;
}
