<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class CertificateController extends Controller
{

    private function generateCode($length){
      $include_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $charLength = strlen($include_chars);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $include_chars [rand(0, $charLength - 1)];
      }
      return $randomString;
    }

    public function GenerateCertificate($vcode){
      $data=DB::table('vehicles')->where('vcode',$vcode)->get()->toArray();
      //return view('client.certificate',compact('data'));

      return PDF::setOptions(['debugCss'=>true,'dpi'=>150,'isRemoteEnabled' => true,'isHtml5ParserEnabled'=>true])->loadView('client.certificate',compact('data'))->download('certificate.pdf');
    }

    public function viewVerifyLearner(){
      return view('client.pages.verify_card');
    }

    public function verifyLeaner(){

    }

    public function viewAddLeaner(){
      return view('admin.pages.add_leaner');
    }

    public function addLearner(Request $req){
      try{
        //dd($req->all());
        $req->validate([
          'certificates' => 'required',
          'file_image' => 'required|image',
        ],[
          'certificates.required' => 'Add Certificates',
          'file_image.image' => 'Upload Image Only',
        ]);
        $fileName=md5(uniqid().$req->file_image->getClientOriginalName());
        $fileExt=$req->file_image->getClientOriginalExtension();
        $path=request()->file('file_image')->move(base_path().'/public/uploads/members/',$fileName.'.'.$fileExt);

        DB::beginTransaction();

        $id=DB::table('leaners')->insertGetId([
          'learner_name' => $req->name,
          'learner_nationality' => $req->nationality,
          'learner_vcode' => $this->generateCode(7),
          'created_at' => now(),
          'image_path' => $fileName.'.'.$fileExt,
        ]);

        foreach($req->certificates as $cert){
          DB::table('leaner_programs')->insert([
            'fk_learner' => $id,
            'course' =>  $cert["course"],
            'category' => $cert['category'] ,
            'tr_center' => $cert['tr_center'],
            'as_center' => $cert['as_center'],
            'expiry' => $cert['expiry']
          ]);
        }
        DB::commit();
        session()->flash('success','Certificate Generated');
        return redirect()->back();
      }catch(\Exception $ex){
        DB::rollBack();
        dd($ex->getMessage());
      }
    }

    public function viewLeanersList(){
      $learners=DB::table('leaners')->orderBy('learner_id','DESC')->get()->toArray();
      foreach($learners as $key=>$ln){
        $data=DB::table('leaner_programs')->where('fk_learner',$ln->learner_id)->get()->toArray();
        $learners[$key]->programs=$data;
      }
      return view('admin.pages.list_learners',compact('learners'));
    }

    public function deleteCertificate($id){
      DB::table('leaners')->where('learner_id',$id)->delete();
      session()->flash('success','Learner Deleted');
      return redirect()->back();
    }

    public function viewCertificate(Request $req){
      return response($req->vcode);
    }
}
