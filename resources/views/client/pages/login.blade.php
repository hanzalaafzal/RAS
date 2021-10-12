@extends('client.includes.main')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pageSection">
    <link href="{{asset('assets/css/fontNada.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css" media="all">

    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">
        <h1 class="title-MaisaHeader" style="margin-bottom: -15px;z-index: -3">Login / Log out</h1>
        <span style="color:white;margin-bottom: -150px;z-index: -3">> </span>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href='#'>Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login / Log out</li>
          </ol>
        </nav>
    </div>

    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12" style="min-height: 235px">
      @if($errors->has('userid'))
      <div class="alert alert-danger" role="alert">
        <ul>
        {{  $errors->first('userid')}}

        </ul>
      </div>
      @endif
      <br>
        <form action="{{route('authenticate')}}" method="POST" id="myForm">
          @csrf
            <table class="table table-hover">

              <tr>
                <th class="info">

                <span class="fa fa-user"></span> User ID </th>
                  <td>
                    <input type="text" name="userid" placeholder="Please Enter your User ID" class='form-control' autocomplete="off" required>
                  </td>
              </tr>
              <tr>
                <th class="info"><input type="hidden" value="login" name="operation"><span class="fa fa-lock"></span> Password </th>
                <td>
                  <input type="password" name="password" placeholder="Please Enter your Password" class='form-control' required>
                </td>
              </tr>


        <tr>
            <td colspan="2" class="text-center">
                <input type="submit" class="btn btn-primary" value="Login">
            </td>
        </tr>

  </table>
</form>
</div>







 </div>
@endsection
