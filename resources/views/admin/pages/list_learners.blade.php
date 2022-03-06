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
                            <h4 class="page-title">Learner Certificates</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Learners</li>
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
                                  <th width="10%">Image</th>
                                  <th width="10%">Name</th>
                                  <th width="10%">Nationality</th>
                                  <th width="10%">Verification Code</th>
                                  <th width="40%">Course/Program</th>
                                  <th>Action</th>
                                  <!-- <th width="10%">Certificate</th> -->
                              </tr>
                              </thead>
                              <tbody>

                                @foreach($learners as $ln)
                                  <tr>
                                    <td> <img src="{{asset('uploads/members/'.$ln->image_path)}}" style="width:110px" alt=""> </td>
                                    <td>{{$ln->learner_name}}</td>
                                    <td>{{$ln->learner_nationality}}</td>
                                    <td>{{$ln->learner_vcode}}</td>
                                    <td>
                                      <ol>
                                      @foreach($ln->programs as $pg)

                                          <li>{{$pg->course}}
                                            <ul>
                                              <li>Category: {{$pg->category}} </li>
                                              <li>Training Centers: {{$pg->tr_center}}</li>
                                              <li>Assessment Centers: {{$pg->as_center}}</li>
                                              <li>Expiry: {{$pg->expiry}}</li>
                                            </ul>

                                          </li>
                                        @endforeach
                                      </ol>
                                    </td>

                                    <td> <a class="btn btn-md" style="color:blue;" onclick="javascript:return confirm('Are you sure you want to delete this learner certificate ?')" href="{{route('delete.learner',$ln->learner_id)}}">Delete</a> </td>

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
        &copy; {{now('Y')}} RAS <span class="d-none d-sm-inline-block float-right">Crafted</span>
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
