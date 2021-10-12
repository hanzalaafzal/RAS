<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class CertificateController extends Controller
{
    public function GenerateCertificate($vcode){
      $data=DB::table('vehicles')->where('vcode',$vcode)->get()->toArray();
      //return view('client.certificate',compact('data'));

      return PDF::setOptions(['debugCss'=>true,'dpi'=>150,'isRemoteEnabled' => true,'isHtml5ParserEnabled'=>true])->loadView('client.certificate',compact('data'))->download('certificate.pdf');
    }
}
