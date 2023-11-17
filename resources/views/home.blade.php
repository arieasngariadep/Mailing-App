@extends('layout.v_template')

@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ml-5">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Jumlah Jenis Surat</h3>
                        <!-- <a href="javascript:void(0);">View Report</a> -->
                        </div>
                    </div>
                    <div class="card-body col-lg-8">
                        <div class="">
                            <div id="monitoringSurat"></div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

                
            </div>
            <!-- /.col-md-6 -->
      
        
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="{{asset('template')}}/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('template')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('template')}}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('template')}}/dist/js/pages/dashboard3.js"></script>
@endsection
