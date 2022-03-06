@extends('client.includes.main')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pageSection">
<link href="{{asset('assets/css/fontNada.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css" media="all">

    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">
      <h1 class="title-MaisaHeader" style="margin-bottom: -15px;z-index: -3">Verify Learner By Verification Number</h1>
      <span style="color:white;margin-bottom: -150px;z-index: -3">> </span>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.jsp.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Verify Learner By Verification Number</li>
          </ol>
      </nav>
    </div>
    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">


          <form>
              <table class='table table-bordered'>

                  <tr><th>Verification Number</th><td>
                      <input type='text' class='form-control' name='verficationCode' id='verficationCode' required="true" value=''>
                  </td></tr>
                  <tr><th colspan="2" class='text-center'><button class='btn btn-primary' type='submit'>Verify <span class='fa fa-search '></span></button></th></tr>
              </table>

          </form>


    </div>

</div>

@endsection
