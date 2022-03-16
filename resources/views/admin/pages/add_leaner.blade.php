@extends('admin.inc.app')
@push('mycss')
<link href="{{ asset('admin-panel/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
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
                            <h4 class="page-title">Add Leaner Certificate Data</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Learner</a></li>

                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <form action="{{route('learner.post')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">

              <div class="col-12">

                  <div class="card">

                      <div class="card-body">
                              <div class="col-md-12">
                                <div class="form-group row">
                                  <div class="col-sm-3">
                                    <label class="form-label">Name*</label>
                                    <input type="text" class="form-control" autocomplete="off" name="name" value="{{old('name')}}" >
                                  </div>
                                  <div class="col-sm-3">
                                    <label class="form-label">Nationality*</label>
                                    <input type="text" class="form-control" autocomplete="off" name="nationality" value="{{old('nationality')}}" >
                                  </div>
                                  <div class="col-sm-3">
                                    <label class="form-label">ROP License*</label>
                                    <input type="text" class="form-control" autocomplete="off" name="rop" value="{{old('rop')}}" >
                                  </div>
                                  <div class="col-sm-3">
                                    <label class="form-label">Image*</label>
                                    <input type="file" class="form-control" name="file_image" required>
                                  </div>
                                </div>
                              </div>
                              <fieldset>
                                  <div class="repeater-default">
                                      <div data-repeater-list="certificates">
                                          <div data-repeater-item="">
                                              <div class="form-group row d-flex align-items-end">

                                                  <div class="col-sm-2">
                                                      <label class="form-label">Course/Program*</label>
                                                      <input type="text" class="form-control" autocomplete="off" name="course" >
                                                  </div><!--end col-->
                                                  <div class="col-sm-2">
                                                      <label class="form-label">Category*</label>
                                                      <input type="text" name="category" autocomplete="off" class="form-control" >
                                                  </div><!--end col-->
                                                  <div class="col-sm-2">
                                                      <label class="form-label">Training Center*</label>
                                                      <textarea name="tr_center" rows="1" class="form-control" autocomplete="off" ></textarea>
                                                  </div><!--end col-->
                                                  <div class="col-sm-2">
                                                      <label class="form-label">Assessment Center*</label>
                                                      <textarea name="as_center" rows="1" class="form-control" autocomplete="off" ></textarea>
                                                  </div><!--end col-->
                                                  <div class="col-sm-2">
                                                      <label class="form-label">Expiry*</label>
                                                      <input type="date" name="expiry" class="form-control" autocomplete="off" >
                                                  </div><!--end col-->
                                                  <div class="col-sm-1">
                                                      <span data-repeater-delete="" class="btn btn-outline-danger">
                                                          <span class="far fa-trash-alt me-1"></span> Delete
                                                      </span>
                                                  </div><!--end col-->
                                              </div><!--end row-->
                                          </div><!--end /div-->

                                      </div><!--end repet-list-->
                                      <div class="form-group mb-0 row">
                                          <div class="col-sm-12">
                                              <span data-repeater-create="" class="btn btn-outline-secondary">
                                                  <span class="fas fa-plus"></span> Add
                                              </span>
                                              <input type="submit" value="Submit" class="btn btn-outline-primary">
                                          </div><!--end col-->
                                      </div><!--end row-->
                                  </div> <!--end repeter-->
                              </fieldset><!--end fieldset-->

                      </div><!--end card-body-->
                  </div><!--end card-->
              </div> <!-- end col -->
          </div> <!-- end row -->
          </form>
        </div><!--end row-->
    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; {{date('Y')}} RAS <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i></span>
    </footer><!--end footer-->
</div>
@endsection

@push('myscript')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin-panel/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{ asset('admin-panel/assets/pages/jquery.form-upload.init.js')}}"></script>
<script src="{{ asset('admin-panel/plugins/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{ asset('admin-panel/assets/pages/jquery.form-repeater.js')}}"></script>
<script type="text/javascript">
function makeid(length) {
  var result           = '';
  var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  var charactersLength = characters.length;
  for ( var i = 0; i < length; i++ ) {
    result += characters.charAt(Math.floor(Math.random() *
charactersLength));
 }
 document.getElementById('vcode').value = result;
}
</script>

@endpush
