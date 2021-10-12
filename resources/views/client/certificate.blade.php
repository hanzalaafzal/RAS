

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <style>
      .cert {
      border: 15px solid #0072c6;
      border-right: 15px solid #0894fb;
      border-left: 15px solid #0894fb;
      width: 100px;
      font-family: arial;
      color: #383737;
      height: 800px;
    }

    .crt_title {

      font-family: "Arial", regular;
      font-size: 80px;
      letter-spacing: 1px;
      color: #0060a9;
    }
    .crt_logo img {
      width: 130px;
      height: auto;
      margin: auto;
      padding: 20px;
    }
    .colorGreen {
      color: #27ae60;
    }
    .crt_user {
      display: inline-block;
      width: 80%;
      padding: 5px 25px;
      margin-bottom: 0px;
      padding-bottom: 0px;
      font-family: "Satisfy", cursive;
      font-size: 40px;
      border-bottom: 1px dashed #cecece;
    }

    .afterName {
      font-weight: 100;
      color: #383737;
    }
    .colorGrey {
      color: grey;
    }
    .certSign {
      width: 200px;
    }

    th {
      width:500px;
      padding:10px;
    }

    .customtable th {
      border:solid black 1px;
      font-size:20px
    }
    td img{
      padding:10px
    }


    tbody {
      background-image: url('https://i.ibb.co/vJvy44C/certificate-background.jpg')
    }

    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
  </head>
  <body>

    <table class="cert">
      <tr>
        <td align="center" style="width: 130px;height: auto;margin: auto;padding: 20px;" class="crt_logo">
          <img src="https://www.davidbenrimon.com/files-wide/uploads/logo-placeholder@2x.png" alt="logo">
        </td>
      </tr>
      <tr>
        <td align="center">
             <h1 class="crt_title">RAS</h1>
            <h1 style="font-size:50px;margin-top:-50px">VEHICLE INSPECTION</h1>

            <table class="customtable" align="left" style="text-align:left">
              <thead>
                <tr>
                  <th>Vehicle Registration</th>
                  <th>{{$data[0]->regno}}</th>
                </tr>
                <tr>
                  <th>Name of owner</th>
                  <th>{{$data[0]->owner}}</th>
                </tr>
                <tr>
                  <th>Inspection Date</th>
                  <th>{{$data[0]->apDate}}</th>
                </tr>
                <tr>
                  <th>Next Inspection Date</th>
                  <th>{{$data[0]->exDate}}</th>
                </tr>
                <tr>
                  <th>Rasic Number</th>
                  <th>{{$data[0]->rasic}}</th>
                </tr>

                <tr>
                  <th>Inspection Company</th>
                  <th>RAS</th>
                </tr>
                <tr>
                  <th>Name of inspector</th>
                  <th>{{$data[0]->inspector}}</th>
                </tr>
                <tr>
                  <th>Verification Number</th>
                  <th>{{$data[0]->vcode}}</th>
                </tr>
                <tr>
                  <th>Vehicle Approval</th>
                  <th>{{$data[0]->vapproval}}</th>
                </tr>
              </thead>
            </table>

        </td>
      </tr>
      <tr>
        <td>
          <img src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67" class="certSign" alt="sign">
          <img style="float:right" src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67" class="certSign" alt="sign">
        </td>
      </tr>
    </table>
  </body>
</html>
