<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;

class CertificateController extends Controller
{
  public function getAllListeners(){
    $data=DB::table('leaners')->get()->toArray();
    foreach($data as $key=>$dat){
      $tempData=DB::table('leaner_programs')->where('fk_learner',$dat->learner_id)->get()->toArray();
      $data[$key]->programs=$tempData;
    }
    return response(json_encode($data),200);
  }

  public function getSingleCertificate($vcode){
    $data=DB::table('leaners')->where('learner_vcode',$vcode)->get()->toArray();
    foreach($data as $key=>$dat){
      $tempData=DB::table('leaner_programs')->where('fk_learner',$dat->learner_id)->get()->toArray();
      $data[$key]->programs=$tempData;
    }
    return response(json_encode($data),200);
  }

}
