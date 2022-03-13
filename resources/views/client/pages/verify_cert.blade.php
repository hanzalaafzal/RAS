@extends('client.includes.main')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pageSection">
<link href="{{asset('assets/css/fontNada.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css" media="all">
<style media="screen">
  .table thead > tr > th {
    padding: 10px 70px 0px 30% !important;
    border-bottom: 0px !important;
  }
  *{
    font-family: 'Merriweather','Century Gothic','FontOPAL',"Helvetica Neue",sans-serif;
  }
</style>
    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">
      <h1 class="" style=";z-index: -3">{{$data[0]->learner_name}}</h1>
      <span style="color:white;margin-bottom: -150px;z-index: -3">> </span>
      <nav aria-label="breadcrumb">

      </nav>
    </div>
    <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12" style="overflow:scroll">
          <form>

              <table width="100%" class="table table-striped table-bordered table-hover" >
                    <tbody style="overflow:scroll">
                      <tr>
                        <th class="info" width="20%">
                          <img style="width:300px" src="{{asset('uploads/members/').'/'.$data[0]->image_path}}" alt="">
                        </th>
                        <td>
                          <table width="100%">
                            <thead style="">
                              <th > <h2>Profile</h2> </th>
                            </thead>
                            <tbody style="font-size:15px">
                              <td style="border:1px solid black"> <p>Nationality</p> </td>
                              <td style="border:1px solid black"> <p>{{$data[0]->learner_nationality}}</p> </td>
                            </tbody>
                          </table>
                          <table width="100%">
                            <thead style="">
                              <th > <h2>Certificated</h2> </th>
                            </thead>
                            <tbody style="font-size:15px">
                              <tr>
                                <th style="border:1px solid black"> <b>Course/Program</b> </th>
                                <th style="border:1px solid black"> <b>Category</b> </th>
                                <th style="border:1px solid black"> <b>Training Center</b> </th>
                                <th style="border:1px solid black"> <b>Assessment Center</b> </th>
                                <th style="border:1px solid black"> <b>	Expiry Date</b> </th>
                              </tr>
                              @foreach($course as $cr)
                                <tr>
                                  <td style="border:1px solid black"> <p>{{$cr->course}}</p> </td>
                                  <td style="border:1px solid black"> <p>{{$cr->category}}</p> </td>

                                  <td style="border:1px solid black"> <p>{{$cr->tr_center}}</p> </td>

                                  <td style="border:1px solid black"> <p>{{$cr->as_center}}</p> </td>

                                  <td style="border:1px solid black"> <p>{{$cr->expiry}}</p> </td>

                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </td>
                      </tr>
                </tbody>
              </table>


          </form>


    </div>

</div>

@endsection
