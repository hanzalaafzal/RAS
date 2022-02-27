<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Vehicles;

class VehicleController extends Controller
{

    public function deleteVehicle($vcode){
      DB::table('vehicles')->where('vcode',$vcode)->delete();
      session()->flash('success','Vehicle Deleted');
      return redirect()->back();
    }

    public function updateVehicle(Request $req){
      $req->validate([
        'category' => 'required',
        'vcode' => 'required',
        'vplate' => 'required',
        'chassisno' => 'required',
        'owner' => 'required',
        'apDate' => 'required',
        'exDate' => 'required',
        'validExpiry' => 'required',
        'validStatus' => 'required',
        'rasic' => 'required',
        'inspector' => 'required',
        'vapproval' => 'required',
        'ras_center' => 'nullable',
      ]);
      try{

        DB::table('vehicles')->where('vid',$req->vid)->update([
          'category' => $req->category,
          'vcode' => $req->vcode,
          'chassisno' => $req->chassisno,
          'vplate' => $req->vplate,
          'owner' => $req->owner,
          'apDate' => $req->apDate,
          'exDate' => $req->exDate,
          'validExpiry' => $req->validExpiry,
          'validStatus' => $req->validStatus,
          'rasic' => $req->rasic,
          'inspector' => $req->inspector,
          'vapproval' => $req->vapproval,
          'ras_center' => $req->ras_center,
          'vmm' => $req->vmm
        ]);

        session()->flash('success','Vehicle Updated');
        return redirect()->back();

      }catch(\Exception $ex){
        dd($ex->getMessage());
        session()->flash('error','Error updating data');
        return redirect()->back();
      }



    }
    public function viewUpdateVehicles($vcode){
      $vehicle=DB::table('vehicles')->where('vcode',$vcode)->get()->toArray();
      return view('admin.pages.update',compact('vehicle'));
    }

    public function addVehicles(){
      $cats=DB::table('table_category')->get();
      return view('admin.pages.add_vehicle',compact('cats'));
    }

    public function viewVehicles(){
      $vehicles=Vehicles::orderBy('vid','DESC')->get()->toArray();
    //  $vehicles=DB::table('vehicles')->orderBy('vid','DESC')->get();
      return view('admin.pages.list_vehicles',compact('vehicles'));
    }

    public function viewVechileCateogires(){
      $cats=DB::table('table_category')->get();
      return view('admin.pages.add_cateogry',compact('cats'));
    }

    public function postVehicleCategories(Request $req){
      $req->validate([
        'cat_name' => 'required|min:3|max:240',
        'details' => 'nullable'
      ],[
        'cat_name.required' => 'Please Enter category name'
      ]);

      DB::table('table_category')->insert([
        'cat_name' => $req->cat_name,
        'cat_details' => $req->details,
      ]);

      session()->flash('success','Added Vehicle category');
      return redirect()->back();

    }

    public function postVehicles(Request $req){

      $req->validate([
        'category' => 'required',
        'vcode' => 'required|unique:App\Vehicles,vcode',
        'vplate' => 'required|unique:App\Vehicles,vplate,',
        'chassisno' => 'required|unique:App\Vehicles,chassisno',
        'owner' => 'required',
        'apDate' => 'required',
        'exDate' => 'required',
        'validExpiry' => 'required',
        'validStatus' => 'required',
        'rasic' => 'required',
        'inspector' => 'required',
        'vapproval' => 'required',
        'ras_center' => 'nullable',
      ],[
        'vcode.unique' => 'Verification Code exists.',
        'vplate.unique' => 'Vehicle with same number exists.',
        'chassisno.unique' => 'Vehicle with same chassis no exists.',
      ]);

      if(\App\Vehicles::create($req->all())){

        session()->flash('success','Vehicle added successfully');
        return redirect()->back();
      }else{
        session()->flash('error','Something went wrong');
        return redirect()->back();
      }

    }

    public function verifyVehicle(Request $req){
    //  return view('client.pages.verify');



      if($req->has('method')){

        if($req->method=="false"){

          $data=Vehicles::where('vcode',$req->verficationCode)->get()->toArray();
          if(!empty($data)){
            $qr=base64_encode(QrCode::format('svg')->size(150)->generate(route('verifyvehicle').'?method=false&verficationCode='.$data[0]['vcode']));
          }

        }else{
          $data=Vehicles::where('vplate',$req->plateNumber)->get()->toArray();
          if(!empty($data)){
            $qr=base64_encode(QrCode::format('svg')->size(150)->generate(route('verifyvehicle').'?method=true&plateNumber='.$data[0]['vplate']));
          }

        }

        if(empty($data)){
          session()->flash('error','No RAS Center Certified With your provided code / plate.');
          $qr='';
        }
        return view('client.pages.verify',compact('data','qr'));
      }else{
          return view('client.pages.verify');
      }






      // dd($req->all());
    }

}
