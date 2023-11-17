
@extends('layout.v_template')

@section('title', 'Edit Surat')
@section('content')

@include('sweetalert::alert')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ url('prosesedit', $regisUp->id)}}" method="post">
            @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="tgl_masuk" style="color:red;">Tanggal Masuk Surat*</label>
                <input type="date" class="form-control form-control-border" name="tgl_masuk" id="tgl_masuk" placeholder="Tanggal Masuk Surat" value="{{ $regisUp->tgl_masuk }}" required>
            </div>
            <?php
                if($regisUp->jenis_surat == "MEMO"){
                    $sel = 'selected';
                }elseif($regisUp->jenis_surat == "NOTIN"){
                    $sel = 'selected';
                }elseif($regisUp->jenis_surat == "SURAT"){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
            ?>
            <div class="form-group col-6">
                <label for="jenis_surat" style="color:red;">Jenis Surat*</label>
                <select class="custom-select form-control-border" name="jenis_surat" id="jenis_surat" required>
                    <option value="" <?= $sel ?>>Silahkan Pilih</option>
                    <option value="MEMO" <?= $sel ?>>MEMO</option>
                    <option value="NOTIN" <?= $sel ?>>NOTIN</option>
                    <option value="SURAT" <?= $sel ?>>SURAT</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="no_surat" style="color:red;">No Surat*</label>
                <input type="text" class="form-control form-control-border" name="no_surat" id="no_surat" placeholder="No Surat" value="{{ $regisUp->no_surat }}" required>
            </div>
            <div class="form-group col-6">
                <label for="tgl_surat" style="color:red;">Tanggal Surat*</label>
                <input type="date" class="form-control form-control-border" name="tgl_surat" id="tgl_surat" placeholder="Tanggal Surat" value="{{ $regisUp->tgl_surat }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="tgl_disposisi_gm">Tanggal Disposisi GM</label>
                <input type="date" class="form-control form-control-border" name="tgl_disposisi_gm" id="tgl_disposisi_gm" placeholder="Tanggal Disposisi GM" value="{{ $regisUp->tgl_disposisi_gm }}">
            </div>
            <div class="form-group col-6">
                <label for="disposisi_untuk">Disposisi Untuk</label>
                <input type="text" class="form-control form-control-border" name="disposisi_untuk" id="disposisi_untuk" placeholder="Disposisi Untuk" value="{{ $regisUp->disposisi_untuk }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="perihal" style="color:red;">Perihal*</label>
                <input type="text" class="form-control form-control-border" name="perihal" id="perihal" placeholder="Perihal" value="{{ $regisUp->perihal }}" required>
            </div>
            <div class="form-group col-6">
                <label for="posisi_surat">Posisi Surat</label>
                <input type="text" class="form-control form-control-border" name="posisi_surat" id="posisi_surat" placeholder="Posisi Surat" value="{{ $regisUp->posisi_surat }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="tgl_disposisi_pimkel">Tanggal Disposisi Pimkel</label>
                <input type="date" class="form-control form-control-border" name="tgl_disposisi_pimkel" id="tgl_disposisi_pimkel" placeholder="Tanggal Disposisi Pimkel" value="{{ $regisUp->tgl_disposisi_pimkel }}">
            </div>
            <div class="form-group col-6">
                <label for="disposisi_untuk2">Disposisi Untuk</label>
                <input type="text" class="form-control form-control-border" name="disposisi_untuk2" id="disposisi_untuk2" placeholder="Disposisi Untuk" value="{{ $regisUp->disposisi_untuk2 }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control form-control-border" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ $regisUp->keterangan }}">
            </div>
            <div class="form-group col-6 mt-3">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
        <div class="row">
        </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection

