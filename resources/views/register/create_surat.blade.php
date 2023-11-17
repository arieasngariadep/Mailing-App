
@extends('layout.v_template')

@section('title', 'Tambah Surat')
@section('content')

@include('sweetalert::alert')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('prosestambah')}}" method="post">
            @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="tgl_masuk" style="color:red;">Tanggal Masuk Surat*</label>
                <input type="date" class="form-control form-control-border" name="tgl_masuk" id="tgl_masuk" placeholder="Tanggal Masuk Surat" required>
            </div>
            <div class="form-group col-6">
                <label for="jenis_surat" style="color:red;">Jenis Surat*</label>
                <select class="custom-select form-control-border" name="jenis_surat" id="jenis_surat" required>
                <option value="">Silahkan Pilih</option>
                <option value="MEMO">MEMO</option>
                <option value="NOTIN">NOTIN</option>
                <option value="SURAT">SURAT</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="no_surat" style="color:red;">No Surat*</label>
                <input type="text" class="form-control form-control-border" name="no_surat" id="no_surat" placeholder="No Surat" required>
            </div>
            <div class="form-group col-6">
                <label for="tgl_surat" style="color:red;">Tanggal Surat*</label>
                <input type="date" class="form-control form-control-border" name="tgl_surat" id="tgl_surat" placeholder="Tanggal Surat" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="tgl_disposisi_gm">Tanggal Disposisi GM</label>
                <input type="date" class="form-control form-control-border" name="tgl_disposisi_gm" id="tgl_disposisi_gm" placeholder="Tanggal Disposisi GM">
            </div>
            <div class="form-group col-6">
                <label for="disposisi_untuk">Disposisi Untuk</label>
                <input type="text" class="form-control form-control-border" name="disposisi_untuk" id="disposisi_untuk" placeholder="Disposisi Untuk">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="perihal" style="color:red;">Perihal*</label>
                <input type="text" class="form-control form-control-border" name="perihal" id="perihal" placeholder="Perihal" required>
            </div>
            <div class="form-group col-6">
                <label for="posisi_surat">Posisi Surat</label>
                <input type="text" class="form-control form-control-border" name="posisi_surat" id="posisi_surat" placeholder="Posisi Surat">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="tgl_disposisi_pimkel">Tanggal Disposisi Pimkel</label>
                <input type="date" class="form-control form-control-border" name="tgl_disposisi_pimkel" id="tgl_disposisi_pimkel" placeholder="Tanggal Disposisi Pimkel">
            </div>
            <div class="form-group col-6">
                <label for="disposisi_untuk2">Disposisi Untuk</label>
                <input type="text" class="form-control form-control-border" name="disposisi_untuk2" id="disposisi_untuk2" placeholder="Disposisi Untuk">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control form-control-border" name="keterangan" id="keterangan" placeholder="Keterangan">
            </div>
            <div class="form-group col-6 mt-3">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
        <div class="row">
        </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection

