<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterSurat;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function halamandashboard()
    {
        $notin = RegisterSurat::getDataNotin();
        $memo = RegisterSurat::getDataMemo();
        $surat = RegisterSurat::getDataSurat();
        $data = array(
            'notin' => $notin,
            'memo' => $memo,
            'surat' => $surat
        );
        return view('home', $data);
    }
}
