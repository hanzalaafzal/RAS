<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;

class VehiclesController extends Controller
{

    public function getSingleVehicle($vcode){
      $data=DB::table('vehicles')->where('vcode' ,$vcode)->get()->toArray();
      $data[0]->qr_url=route('verifyvehicle').'?method=false&verficationCode='.$data[0]->vcode;
      return response(json_encode($data),200);
    }

    public function getAllVehicles(){
      $data=DB::table('vehicles')->get()->toArray();
      return response(json_encode($data),200);
    }

    public function RegisterVehicle(Request $req){
      $validate=Validator::make($req->all(),[
        'category' => 'required',
        'vcode' => 'required|unique:App\Vehicles,vcode',
        'vplate' => 'required|unique:App\Vehicles,vplate,',
        'regno' => 'required|unique:App\Vehicles,regno',
        'chassisno' => 'required|unique:App\Vehicles,chassisno',
        'owner' => 'required',
        'apDate' => 'required',
        'exDate' => 'required',
        'validExpiry' => 'required',
        'validStatus' => 'required',
        'rasic' => 'required',
        'inspector' => 'required',
        'vapproval' => 'required',
      ]);

      if($validate->fails()){
        return response(json_encode($validate->errors()),500);
      }else{
        if(\App\Vehicles::create($req->all())){
          return response(json_encode([
            "status" => "ok",
          ]),200);
        }else{
          return response(json_encode([
            'error' => "something went wrong",
          ]),400);
        }
      }
    }

    public function verifyVehicle(Request $req){

        if(!empty($req->verification_code)){
          $data=DB::table('vehicles')->where('vcode',$req->verification_code)->get()->toArray();
          if(!empty($data)){
            $data[0]->qrcode=route('verifyvehicle').'?method=false&verficationCode='.$data[0]->vcode;
          }else{
            return response(json_encode("not_found"),404);
          }
        }elseif(!empty($req->plate_no)){
          $data=DB::table('vehicles')->where('vplate',$req->plate_no)->get()->toArray();
          if(!empty($data)){
            $data[0]['qrcode']=route('verifyvehicle').'?method=true&plateNumber='.$data[0]->vplate;
          }else{
            return response(json_encode("not_found"),404);
          }
        }

        return response(json_encode($data),200);

    }

    public function getCategories(){
      $data=DB::table('table_category')->get()->toArray();
      return response(json_encode($data),200);
    }
}
