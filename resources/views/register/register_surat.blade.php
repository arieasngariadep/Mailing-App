
@extends('layout.v_template')

@section('title', 'Register Surat')
@section('content')

@include('sweetalert::alert')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Register Surat</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <a href="#" class="btn btn-block btn-info btn-sm" style="width: 180px" data-toggle="modal" data-target="#modal-info">
                            <i class="fas fa-file-excel"></i>&nbsp; Import
                          </a>
                    </div>
                    <div class="col-md-2">
                        <a href="../public/template_surat.xlsx" class="btn btn-block btn-success btn-sm" style="width: 180px"><i class="fas fa-file-excel"></i>
                            &nbsp;Download Template</a>
                    </div>
                    <div class="col-md-8 d-flex justify-content-end">
                        <a href="{{ route('createsurat')}}" class="btn btn-block btn-info btn-sm" style="width: 150px"><i class="fas fa-plus-square"></i>&nbsp; Tambah Data</a>
                    </div>
                </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Masuk</th>
                <th>Jenis Surat</th>
                <th>No Surat </th>
                <th>Tanggal Surat</th>
                <th>Tgl Disposi GM</th>
                <th>Disposisi Untuk</th>
                <th>Perihal</th>
                <th>Posisi Surat </th>
                <th>Tanggal Disposisi Pimkel</th>
                <th>Disposisi Untuk</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                    foreach ($register as $list ){

                        $buttonData = "
                        <a href='".url('editsurat', $list->id)."'>
                            <i class='fas fa-edit'></i>
                        </a> &nbsp | &nbsp
                        <a href='".url('deletesurat', $list->id)."' style='color:red'>
                            <i class='fas fa-trash-alt'></i>
                        </a>
                        </form>
                        ";
                        echo "
                        <tr>
                            <td> $no </td>
                            <td>{$list->tgl_masuk}</td>
                            <td>{$list->jenis_surat}</td>
                            <td>{$list->no_surat}</td>
                            <td>{$list->tgl_surat}</td>
                            <td>{$list->tgl_disposisi_gm}</td>
                            <td>{$list->disposisi_untuk}</td>
                            <td>{$list->perihal}</td>
                            <td>{$list->posisi_surat}</td>
                            <td>{$list->tgl_disposisi_pimkel}</td>
                            <td>{$list->disposisi_untuk2}</td>
                            <td>{$list->keterangan}</td>
                            <td> $buttonData </td>
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

        {{-- Import modal Excel --}}

        <div class="modal fade" id="modal-info">
            <div class="modal-dialog">
                <div class="modal-content bg-info">
                    <div class="modal-header">
                        <h4 class="modal-title">Info Modal</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('importregister') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-light">Import</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

  <script>
  function myFunction() {
      if(!confirm("Yakin Untuk Menghapus?"))
      event.preventDefault();
  }
 </script>
 <script>
    $(".edit").on('click', function(e){
        e.preventDefault();
        $("#id").val($(this).data('id'));
        $(".formDoneAcquiring").modal('toggle');
    });
</script>


@endsection

