@extends('layout.v_template')

@section('title', 'List User')
@section('content')

@include('sweetalert::alert')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row mb-3">
          <div class="col-md-12 d-flex justify-content-end">
              <a href="{{ route('createuser')}}" class="btn btn-block btn-info btn-sm" style="width: 150px"><i class="fas fa-plus-square"></i>&nbsp; Tambah Data</a>
          </div>
      </div>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th style="width: 50px">No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($user as $list ){
                    $buttonData = "
                        <a href='".url('edituser', $list->id)."'>
                            <i class='fas fa-edit'></i>
                        </a> &nbsp | &nbsp
                        <a href='".url('deleteuser', $list->id)."' style='color:red'>
                            <i class='fas fa-trash-alt'></i>
                        </a> ";
                        echo"
                        <tr>
                            <td>$no</td>
                            <td>{$list->name}</td>
                            <td>{$list->email}</td>
                            <td>{$list->level}</td>
                            <td>$buttonData</td>

                        </tr>
                        ";
                        $no++;
                }


            ?>

        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
