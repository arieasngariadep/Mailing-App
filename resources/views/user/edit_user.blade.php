
@extends('layout.v_template')

@section('title', 'Edit User')
@section('content')

@include('sweetalert::alert')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('prosesedituser', $editUp->id)}}" method="post">
            @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Nama*</label>
                <input type="text" class="form-control form-control-border" name="name" id="name" placeholder="Masukkan Nama User" value="{{ $editUp->name }}" required>
            </div>
            <div class="form-group col-6">
                <label for="email">Email*</label>
                <input type="email" class="form-control form-control-border" name="email" id="email" placeholder="Masukkan Email User" value="{{ $editUp->email }}" readonly>
            </div>
            <div class="form-group col-6">
                <label for="password">Password*</label>
                <input type="password" class="form-control form-control-border" name="password" id="password" placeholder="Masukkan Password User" required>
            </div>
            <div class="form-group col-6">
                <label for="confirm_password">Konfirmasi Password*</label>
                <input type="password" class="form-control form-control-border" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Password User" required>
            </div>
            <div class="form-group col-6" hidden>
                <label for="role">Role*</label>
                <input type="text" class="form-control form-control-border" name="level" id="level" placeholder="Masukkan Role User" value="karyawan" required>
            </div>
        </div>
            <div class="form-group col-6 mt-3">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                
            </div>
        </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection

