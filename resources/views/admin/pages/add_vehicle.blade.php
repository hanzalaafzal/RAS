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
                            <h4 class="page-title">Add Vehicle Data</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Vehicle</a></li>
                                <li class="breadcrumb-item active">Vehicle</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <form action="{{route('post.vehicle')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-10">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label text-right">Category *</label>
                                  <div class="col-sm-10">
                                      <select class="form-control" required id="typeSelection" name="category">
                                          <option selected disabled>Select Category</option>
                                          @foreach($cats as $cat)
                                            <option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
                                          @endforeach

                                      </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Verification Code *</label>
                                    <div class="col-sm-4">
                                      <div class="input-group-prepend">
                                        <input class="form-control @error('vcode') is-invalid @enderror" type="text" id="vcode" name="vcode" value="{{old('vcode')}}" required>
                                      </div>
                                      @error('vcode')
                                      <small style="color:red">{{$message}}</small>
                                      @enderror
                                    </div>

                                    <div>
                                        <a href="#" class="badge badge-pill badge-soft-primary" onclick="makeid(10)">Generate Random</a>
                                    </div>

                                    <label for="example-email-input" class="col-sm-1 col-form-label">Vehicle Plate*</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="vplate" value="{{old('vplate')}}" class="form-control @error('vplate') is-invalid @enderror" required>
                                        @error('vplate')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Fleet No</label>
                                    <div class="col-sm-4">
                                      <input class="form-control" type="text" name="fleet" value="{{old('fleet')}}">
                                    </div>
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Registration No*</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" value="{{old('regno')}}" name="regno">
                                        @error('regno')
                                        <small style="color">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Chassis No *</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" name="chassisno" value="{{old('chassisno')}}" required>
                                        @error('chassisno')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Owner *</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="owner" value="{{old('owner')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="" class="col-sm-2 col-form-label">Vehicle Make & Model</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="vmm" class="form-control" value="{{old('vmm')}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">Approval Date *</label>
                                    <div class="col-sm-4">
                                      <input type="date" class="form-control" name="apDate" value="{{date('Y-m-d')}}" required>
                                    </div>
                                   <label for="example-email-input"  class="col-sm-2 col-form-label">Expiry Date *</label>
                                    <div class="col-sm-4">
                                      <input type="date" name="exDate" value="" class="form-control" requried>
                                    </div>
                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Valid in Term of Expiry</label>
                                      <div class="col-sm-4">
                                        <select class="form-control" name="validExpiry" required>
                                          <option value="yes">Yes</option>
                                          <option value="no">No</option>
                                        </select>
                                      </div>
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Valid in Term of Status date</label>
                                      <div class="col-sm-4">
                                        <select class="form-control" name="validStatus" requried>
                                          <option value="yes">Yes</option>
                                          <option value="no">No</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">RASIC No*</label>
                                      <div class="col-sm-4">
                                        <input type="text" name="rasic" class="form-control" value="{{old('rasic')}}" required>
                                        @error('rasic')
                                          <small style="color:red">{{$message}}</small>
                                        @enderror
                                      </div>
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Name of Inspector*</label>
                                      <div class="col-sm-4">
                                          <input type="text" name="inspector" class="form-control" value="{{old('inspector')}}" required>
                                          @error('inspector')
                                            <small style="color:red">{{$message}}</small>
                                          @enderror
                                      </div>
                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Vehicle Approval*</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="vapproval" class="form-control" value="{{old('vapproval')}}" required>
                                      </div>

                                </div>
                              </div>
                            </div>
                            <div class="form-group float-right">
                              <button type="button" id="clearBtn" class="btn btn-info btn-md">Clear</button>
                              <button type="submit" id="btnAddStock" class="btn btn-dark btn-md">Add Vehicle</button>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
          </form>
        </div><!--end row-->
    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; {{date('Y')}} RAS <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Hanzala</span>
    </footer><!--end footer-->
</div>
@endsection

@push('myscript')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin-panel/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{ asset('admin-panel/assets/pages/jquery.form-upload.init.js')}}"></script>

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
