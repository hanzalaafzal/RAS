@extends('admin.inc.app')

@push('mycss')
<link href="{{ asset('admin-panel/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin-panel/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin-panel/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('page_content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Vehicles</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Vehicles</li>
                            </ol>
                        </div><!--end col-->

                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
              <div class="row">
                  <div class="col-12">
                    <div>
                      <div class="table">
                          <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0;">
                              <thead>
                              <tr>
                                  <th width="10%">Verification Code</th>
                                  <th width="10%">Category</th>
                                  <th width="10%">Vehicle Plate </th>
                                  <th width="10%">Registration No</th>
                                  <th width="10%">Chassis No</th>
                                  <th width="10%">Owner</th>

                                  <th width="10%">Approval Date</th>
                                  <th width="10%">Expiry Date</th>
                                  <th width="10%">Rasic No</th>
                                  <th width="10%">Certificate</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                                @foreach($vehicles as $veh)
                                  <tr>
                                    <td>{{$veh->vcode}}</td>
                                    <td>{{$veh->cat_name}}</td>
                                    <td>{{$veh->vplate}}</td>
                                    <td>{{$veh->regno}}</td>
                                    <td>{{$veh->chassisno}}</td>
                                    <td>{{$veh->owner}}</td>
                                    <td>{{$veh->apDate}}</td>
                                    <td>{{$veh->exDate}}</td>
                                    <td>{{$veh->rasic}}</td>
                                    <td> <a href="{{route('certificate',$veh->vcode)}}" style="color:blue;text-decoration:underline"> Generate </a> </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                    </div>
                  </div> <!-- end col -->
              </div> <!-- end row -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; {{now('Y')}} RAS <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Hanzala</span>
    </footer><!--end footer-->
</div>
@endsection
@push('myscript')

      <!---   DataTables JS    -->
      <script src="{{ asset('admin-panel/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
      <!---   DataTables ~ Buttons JS    -->
      <script src="{{ asset('admin-panel/plugins/datatables/dataTables.buttons.min.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/jszip.min.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/pdfmake.min.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/vfs_fonts.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/buttons.html5.min.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/buttons.print.min.js')}}"></script>
      <script src="{{ asset('admin-panel/plugins/datatables/buttons.colVis.min.js')}}"></script>

      <script>
          $('#datatable').DataTable();
      </script>
@endpush
