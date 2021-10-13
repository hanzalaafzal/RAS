@extends('client.includes.main')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pageSection">
<link href="{{asset('assets/css/fontNada.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css" media="all">

    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">
      <h1 class="title-MaisaHeader" style="margin-bottom: -15px;z-index: -3">Verify RAS Vehicles</h1>
      <span style="color:white;margin-bottom: -150px;z-index: -3">> </span>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.jsp.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Verify RAS Vehicles</li>
          </ol>
      </nav>
    </div>
    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">


          <form>
              <table class='table table-bordered'>
                  <tr>
                      <th>Verification method</th><td>
                          <input type='radio' name='method' value='false' onchange="checkMethod();" checked="true"> By Verification Code
                          <input type='radio' name='method' value='true' onchange="checkMethod();"> By Vehicle Plate/Regis Number
                      </td>
                  </tr>
                  <tr><th>Verification Code</th><td><input type='text' class='form-control' name='verficationCode' id='verficationCode' required="true" value=''></td></tr>
                  <tr><th>Vehicle Plate Number </th><td><input type='text' class='form-control' name='plateNumber' id='plateNumber' readonly="true" value=''></td></tr>
                  <tr><th colspan="2" class='text-center'><button class='btn btn-primary' type='submit'>Search <span class='fa fa-search '></span></button></th></tr>
              </table>
              @if(!empty($data))
              <table width="100%" class="table table-striped table-bordered table-hover ">
                    <tbody><tr><th class="info" width="30%">Vehicle Category</th><td>{{$data[0]->category}}</td></tr>
                    <tr><th class="info" width="30%">Vehicle Fleet Number</th><td>{{$data[0]->fleet}}</td></tr>
                    <tr><th class="info" width="30%">Vehicle Registration/plate Number </th><td>{{$data[0]->vplate}}</td></tr>
                    <tr><th class="info" width="30%">Vehicle Chassis Number</th><td>{{$data[0]->chassisno}}</td></tr>
                    <tr><th class="info" width="30%">Vehicle Owner </th><td>{{$data[0]->owner}}</td></tr>
                    <tr><th class="info" width="30%">Vehicle Make &amp; Model </th><td>{{$data[0]->vmm}}</td></tr>
                    <tr><th class="info" width="30%">Certificated by RAS Center</th><td>{{$data[0]->ras_center}}</td></tr>
                    <tr><th class="info">Approval Date</th><td>{{$data[0]->apDate}}</td></tr>
                    <tr><th class="info">Expiry Date</th><td>{{$data[0]->exDate}}</td></tr>
                    <tr><th class="info">Valid in Term of Expiry Date</th><td class="success"> {{$data[0]->validExpiry}} </td></tr>
                    <tr><th class="info">Valid in Term of Status Date</th><td class="success"> {{$data[0]->validStatus}}</td></tr>

                    <!--tr><th class='info'>Is Current</th><td class='danger'>No, The Vehicle is Re-examnation </td></tr-->

                    <tr><th class="info">QR</th><td><center><img src="data:image/svg+xml;base64,{{ $qr }}" class="img-responsive"></center></td></tr>
                </tbody></table>

                @else
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert"><span class="fa fa-times-circle-o"></span> {{session('error')}}</div>
                    @endif
                @endif
          </form>


    </div>

</div>

@endsection
<script>
    function checkMethod(){
        var mobileNumberValue=$("input[name='method']:checked").val();
        if(mobileNumberValue===null||mobileNumberValue.length===0||mobileNumberValue.trim()===""||mobileNumberValue.trim()==="null"){
                mobileNumberValue="true";
        }
        if(mobileNumberValue===false || mobileNumberValue==="false"){
            document.getElementById('plateNumber').value="";
            document.getElementById('plateNumber').setAttribute("readonly",true);
            document.getElementById('verficationCode').setAttribute("required",true);
            document.getElementById('verficationCode').removeAttribute("readonly");
            document.getElementById('plateNumber').removeAttribute("required");
        }else{
            document.getElementById('verficationCode').value="";
            document.getElementById('verficationCode').setAttribute("readonly",true);
            document.getElementById('plateNumber').setAttribute("required",true);
            document.getElementById('plateNumber').removeAttribute("readonly");
            document.getElementById('verficationCode').removeAttribute("required");
        }
    }
</script>
