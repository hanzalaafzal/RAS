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
                            <h4 class="page-title">Update Vehicle Data</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Vehicle</a></li>
                                <li class="breadcrumb-item active">Update</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <form action="{{route('update.vehicle')}}" method="POST" enctype="multipart/form-data">
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
                                      <input type="text" name="category" value="{{ $vehicle['category'] }}" required class="form-control">
                                      <input type="text" name="vid" value="{{ $vehicle['vid'] }}" required class="form-control" hidden>
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Verification Code *</label>
                                    <div class="col-sm-4">
                                      <div class="input-group-prepend">
                                        <input class="form-control @error('vcode') is-invalid @enderror" type="text" id="vcode" name="vcode" value="{{ $vehicle['vcode'] }}" required>
                                      </div>
                                      @error('vcode')
                                      <small style="color:red">{{$message}}</small>
                                      @enderror
                                    </div>

                                    <div>
                                        <a href="#" class="badge badge-pill badge-soft-primary" onclick="makeid(10)">Generate Random</a>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Fleet No</label>
                                    <div class="col-sm-4">
                                      <input class="form-control" type="text" name="fleet" value="{{ $vehicle['fleet'] }}">
                                    </div>
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Registration No*</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" value="{{ $vehicle['vplate'] }}" name="vplate">
                                        @error('vplate')
                                        <small style="color">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Chassis No *</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" name="chassisno" value="{{ $vehicle['chassisno'] }}" required>
                                        @error('chassisno')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Owner *</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="owner" value="{{ $vehicle['owner'] }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="" class="col-sm-2 col-form-label">Vehicle Make & Model</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="vmm" class="form-control" value="{{ $vehicle['vmm'] }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">Approval Date *</label>
                                    <div class="col-sm-4">
                                      <input type="date" class="form-control" name="apDate" value="{{ $vehicle['apDate'] }}" required>
                                    </div>
                                   <label for="example-email-input"  class="col-sm-2 col-form-label">Expiry Date *</label>
                                    <div class="col-sm-4">
                                      <input type="date" name="exDate" value="{{ $vehicle['exDate'] }}" class="form-control" requried>
                                    </div>
                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Valid in Term of Expiry</label>
                                      <div class="col-sm-4">
                                        <select class="form-control" name="validExpiry" required>
                                          <option @if($vehicle['validExpiry']=="yes") selected @endif value="yes">Yes</option>
                                          <option @if($vehicle['validExpiry']=="no") selected @endif value="no">No</option>
                                        </select>
                                      </div>
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Valid in Term of Status date</label>
                                      <div class="col-sm-4">
                                        <select class="form-control" name="validStatus" requried>
                                          <option @if($vehicle['validStatus']=="yes") selected @endif  value="yes">Yes</option>
                                          <option @if($vehicle['validExpiry']=="no") selected @endif  value="no">No</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">RASIC No*</label>
                                      <div class="col-sm-4">
                                        <input type="text" name="rasic" class="form-control" value="{{ $vehicle['rasic'] }}" required>
                                        @error('rasic')
                                          <small style="color:red">{{$message}}</small>
                                        @enderror
                                      </div>
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Name of Inspector*</label>
                                      <div class="col-sm-4">
                                          <input type="text" name="inspector" class="form-control" value="{{ $vehicle['inspector'] }}" required>
                                          @error('inspector')
                                            <small style="color:red">{{$message}}</small>
                                          @enderror
                                      </div>
                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Vehicle Approval*</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="vapproval" class="form-control" value="{{ $vehicle['vapproval'] }}" required>
                                      </div>

                                </div>
                                <div class="form-group row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label">Vehicle Inspection Center</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="ras_center" class="form-control" value="Al Hashar & Company LLC (Al Azaiba Workshop)" required>
                                      </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group float-right">
                              <button type="button" id="clearBtn" class="btn btn-info btn-md">Clear</button>
                              <button type="submit" id="btnAddStock" class="btn btn-dark btn-md">Update Vehicle</button>
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
