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
                            <h4 class="page-title">Vehicle Categories</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Categories</a></li>
                                <li class="breadcrumb-item active">View/Add</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <form id="stockForm" action="{{route('post.category')}}" method="POST">
          @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Name*</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="cat_name" required>
                                        @error('cat_name')
                                          <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                  <label for="example-email-input"  class="col-sm-2 col-form-label">Details</label>
                                  <div class="col-sm-8">
                                    <textarea name="details" rows="4" class="form-control"></textarea>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="form-group float-right">

                              <button type="submit" id="btnAddStock" class="btn btn-dark btn-md">Add Category</button>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
          </form>
          <div class="row">
              <div class="col-12">
                <div>
                  <div class="table">
                      <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0;">
                          <thead>
                          <tr>
                              <th width="20%">Category Name</th>
                              <th>Coupon Details</th>
                              <th>Actions</th>
                          </tr>
                          </thead>
                          @foreach($cats as $cat)
                            <tr>
                              <td>{{$cat->cat_name}}</td>
                              <td>{{$cat->cat_details}}</td>
                            </tr>
                          @endforeach

                      </table>
                  </div>
                </div>
              </div> <!-- end col -->
          </div> <!-- end row -->
        </div><!--end row-->
    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; 2021 TechoStudios <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by TechoStudios</span>
    </footer><!--end footer-->
</div>
<!-- end page content -->



@endsection

@push('myscript')

@endpush
