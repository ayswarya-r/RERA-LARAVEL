<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\builderinfo;
use File;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Session;
class projectController extends Controller
{
    //
     public function projdisp()
   {
   	return view('projectdisplay');
   }
   public function lgreg()
   {
   	return view('logn');
   }
   public function proreg1()
   {
   	return view('projectreg1');
   }
   public function proreg2()
   {
   	return view('projectreg2');
   }
   public function proreg3()
   {
   	return view('projectreg3');
   }
   public function projectreg1Validate(Request $request)
   {
      session(['orgtype' => $request->input('orgtype')]);
      session(['regno' => $request->input('regno')]);
      session(['orgname' => $request->input('orgname')]);
      session(['mailid' => $request->input('mailid')]);
      session(['pan' => $request->input('pan')]);
      session(['gst' => $request->input('gst')]);
      session(['add1' => $request->input('add1')]);
      session(['add2' => $request->input('add2')]);
      session(['mandal' => $request->input('mandal')]);
      session(['area' => $request->input('area')]);
      session(['district' => $request->input('district')]);
      session(['state' => $request->input('state')]);
      session(['pincode' => $request->input('pincode')]);
      session(['authname' => $request->input('authname')]);
      session(['pan' => $request->input('pan')]);
      session(['pan' => $request->input('pan')]);
      session(['authadd1' => $request->input('authadd1')]);
      session(['authadd2' => $request->input('authadd2')]);
      session(['authmandal' => $request->input('authmandal')]);
      session(['authstate' => $request->input('authstate')]);
      session(['authdistrict' => $request->input('authdistrict')]);
      session(['authstate' => $request->input('authstate')]);
      session(['authpincode' => $request->input('authpincode')]);
      $path=public_path().'\\builderfiles\\'.$request->input('pan');
      echo $path;


      File::makeDirectory($path);

      if (input::file('rocfile')) {
      $file = input::file('rocfile');
      $file->move($path,$file->getClientOriginalName());
      $url= URL::to('/').'builderfiles/'.$request->input('pan').'/'.$file->getClientOriginalName();
      //$url=$path.'\\'.$file->getClientOriginalName();
      session(['rocfile' => $url]);
      }
      if (input::file('panfile')) {
      $file = $request->file('panfile');
      $file->move($path,$file->getClientOriginalName());
      $url=$path.'\\'.$file->getClientOriginalName();
      session(['pannumberfile' =>$url]);
      }
      if (input::file('gstnofile')) {
      $file = $request->file('gstnofile');
      $file->move($path,$file->getClientOriginalName());
      $url=$path.'\\'.$file->getClientOriginalName();
      session(['gstnofile' => $url]);
      }
      if (input::file('addproof')) {
      $file = $request->file('addproof');
      $file->move($path,$file->getClientOriginalName());
      $url=$path.'\\'.$file->getClientOriginalName();
      session(['addressfile' => $url]);
      }
      if (input::file('authaddproof')) {
      $file = $request->file('authaddproof');
      $file->move($path,$file->getClientOriginalName());
      $url=$path.'\\'.$file->getClientOriginalName();
      session(['boardresolutionfile' =>$url]);
      }
      if (input::file('authadd')) {
      $file = $request->file('authadd');
      $file->move($path,$file->getClientOriginalName());
      $url=$path.'\\'.$file->getClientOriginalName();
      session(['ahoto' => $url]);
      }
      if (input::file('resolution')) {
      $file = $request->file('resolution');
      $file->move($path,$file->getClientOriginalName());
      $url=$path.'\\'.$file->getClientOriginalName();
      session(['aaddressfile' => $url]);
      }
      

   //   echo $builder;
   //   $builder->save();
      return redirect('/projectreg2'); 
   }
public function projectreg2Validate(Request $request)
   {
      $builder=new builderinfo;
      $builder->Organisationtype=$request->session()->get('orgtype');
      $builder->registrationno =$request->session()->get('regno');
      $builder->organisationname =$request->session()->get('orgname');
      $builder->emailid=$request->session()->get('mailid');
      $builder->pannumber =$request->session()->get('pan');
      $builder->gstno =$request->session()->get('gst');
      $builder->addressline1 =$request->session()->get('add1');
      $builder->addressline2 =$request->session()->get('add2');
      $builder->mandal =$request->session()->get('mandal');
      $builder->localarea =$request->session()->get('area');
      $builder->district =$request->session()->get('district');
      $builder->state=$request->session()->get('state');
      $builder->pincode=$request->session()->get('pincode');
      $builder->aname=$request->session()->get('authname');
      $builder->aemailid=$request->session()->get('pan');
      $builder->amobile=$request->session()->get('pan');
      $builder->aaddressline1=$request->session()->get('authadd1');
      $builder->aaddressline2=$request->session()->get('authadd2');
      $builder->amandal =$request->session()->get('authmandal');
      $builder->alocalarea=$request->session()->get('authstate');
      $builder->adistrict=$request->session()->get('authdistrict');
      $builder->astate=$request->session()->get('state');
      $builder->apincode=$request->session()->get('pincode');

      $builder->aaddressfile=$request->session()->get('aaddressfile');
      $builder->gstnofile=$request->session()->get('gstnofile');
      $builder->ahoto=$request->session()->get('ahoto');
      $builder->boardresolutionfile=$request->session()->get('boardresolutionfile');
      $builder->addressfile=$request->session()->get('addressfile');
      $builder->rocfile=$request->session()->get('rocfile');
      $builder->pannumberfile=$request->session()->get('pannumberfile');
      $builder->save();
      
      echo $builder->rocfile;
   }
}
