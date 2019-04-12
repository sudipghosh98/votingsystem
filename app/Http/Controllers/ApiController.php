<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Validator;
use App\voterlists;
use App\candidatelists;
use App\newelections;
use App\olderelections;
use App\countings;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends Controller
{
    public function insertvoterlist(){
    	$voter=new voterlists();

    	$voter->name = request('name');
    	$voter->email = request('email');
    	$voter->password = request('password');
    	$voter->dob = request('dob');
    	$voter->gender = request('gender');
    	$voter->number = request('number');
    	$voter->pic = request('pic');
    	$voter->save();
    	return redirect('/default.admin');
    }
    public function insertcandidatelist(){
    	$candidate=new candidatelists();

    	$candidate->name = request('name');
    	$candidate->email = request('email');
    	$candidate->password = request('password');
    	$candidate->dob = request('dob');
    	$candidate->gender = request('gender');
    	$candidate->number = request('number');
    	$candidate->pic = request('pic');
    	$candidate->biodata = request('bio');
    	$candidate->save();
    	return redirect('/default.admin');
    }

    public function insertelection(){
    	$candidate=new countings();

    	$candidate->election_name = request('name');
    	$candidate->can1 = request('name1');
            $candidate->vote1 = 0;
        $candidate->email1 = request('email1');
        $candidate->bio1 = request('bio1');
        $candidate->pic1 = request('pic1');
        $candidate->can2 = request('name2');
        $candidate->vote2 = 0;
        $candidate->email2 = request('email2');
        $candidate->bio2 = request('bio2');
        $candidate->pic2 = request('pic2');
        $candidate->can3 = request('name3');
        $candidate->vote3 = 0;
        $candidate->email3 = request('email3');
        $candidate->bio3 = request('bio3');
         $candidate->pic3 = request('pic3');
          
    
    	$candidate->save();
    	return redirect('/default.admin');
    }

    public function deletevoter(Request $request){
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$a=voterlists::where('email',$email)->delete();
    	return redirect('/default.admin');
    }

    public function deletecandidate(Request $request){
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$a=candidatelists::where('email',$email)->delete();
    	return redirect('/default.admin');
    }
    public function old(){
    	$olderelection =olderelections::all();
    	$newelection =newelections::all();
    	
    	return view('/admin',compact('olderelection','newelection'));
    }

    public function loginvoter(Request $request)
    {   
        $email = $request->post('email');
        $password = $request->post('password');
        
        $checklogin = voterlists::where(['email'=>$email,'password'=>$password])->get();
         
        if(count($checklogin)>0)
        {
            return redirect('/index');
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logincandidate(Request $request)
    {   
        $email = $request->post('email');
        $password = $request->post('password');
        
        $checklogin = candidatelists::where(['email'=>$email,'password'=>$password])->get();
         
        if(count($checklogin)>0)
        {
            return redirect('/cdashboard');
        }
        else
        {
            return redirect('/login');
        }
    }
      public function displayelection(){
        $a =countings::all();
       
        
        return view('/election',compact('a'));
    }
         public function incrementvote($id,$vote){
              $a=countings::find($id);
        //   $record=countings::update('update countings set ? = ? + 1 where id=? ',$vote,$a[$vote],$id);
        //    //  $a=countings::find($id);
        //    // echo $a[$vote];
        // countings::where('id', $id)->update(array($vote => 2))->save();
        // return $record;
            if($vote=='vote1'){

        DB::update('update countings set vote1 =? where id = ?',[$a[$vote]+1,$id]);
    }
    else if($vote=='vote2'){
        DB::update('update countings set vote2 =? where id = ?',[$a[$vote]+1,$id]);
        //return $id."   ".$vote;
    }
    else{
        DB::update('update countings set vote3 =? where id = ?',[$a[$vote]+1,$id]);
    }
    return redirect('election1');
    }
    public function addcoloumn(){
      Schema::table('candidatelists', function (Blueprint $table) {
    $table->string('em');
});
        
       
    }
    

  
}
