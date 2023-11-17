<?php

namespace App\Http\Controllers;

use App\Exports\RegisterSuratExport;
use App\Imports\RegisterImport;
use App\Models\RegisterSurat;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function register_surat()
    {
        $register = RegisterSurat::orderBy('id', 'DESC')->get();

        return view('register.register_surat',compact('register'));
    }

    public function registerImportExcel(Request $request)
    {

        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $ekstensi = array($file->getClientOriginalExtension());
        $ekstensiList = array('xls', 'xlsx');

        if(!in_array($ekstensi[0], $ekstensiList)){
            Alert::error('Error', 'Bukan File Excel');
            return back();
        }else{
            $file->move('DataSurat',$namafile);

            Excel::import(new RegisterImport, public_path('/DataSurat/'.$namafile));
            return redirect('/register')->with('toast_success', 'Data Berhasil Ditambah!');
        }

    }

    public function registersuratExport()
    {
        return Excel::download(new RegisterSuratExport,'registersurat.xlsx');
    }

    public function createSurat()
    {
        return view('register.create_surat');
    }

    public function prosesCreate(Request $request)
    {
        RegisterSurat::create([
            'tgl_masuk' => $request->tgl_masuk,
            'jenis_surat' => $request->jenis_surat,
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'tgl_disposisi_gm' => $request->tgl_disposisi_gm,
            'disposisi_untuk' => $request->disposisi_untuk,
            'perihal' => $request->perihal,
            'posisi_surat' => $request->posisi_surat,
            'tgl_disposisi_pimkel' => $request->tgl_disposisi_pimkel,
            'disposisi_untuk2' => $request->disposisi_untuk2,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('register')->with('toast_success', 'Data Berhasil Ditambah!');
    }

    public function editSurat($id)
    {
        $regisUp = RegisterSurat::findorfail($id);
        return view('register.edit_surat', compact('regisUp'));
    }

    public function proseseditSurat(Request $request, $id)
    {
        $regisUp = RegisterSurat::findorfail($id);
        $regisUp->update($request->all());
        return redirect('register')->with('toast_success', 'Data Berhasil di Update!');
    }

    public function deleteSurat($id)
    {
        RegisterSurat::where('id', $id)->delete();
        return back()->with('info', 'Data Berhasil di Hapus!');
    }
}
