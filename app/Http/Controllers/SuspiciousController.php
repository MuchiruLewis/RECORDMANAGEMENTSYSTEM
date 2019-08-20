<?php

namespace App\Http\Controllers;

use App\Models\Suspicious;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SuspiciousController extends Controller
{
	public function __construct() {
		// $this->suspicious = new entry();
	}


    //display data
	public function home(){
		$suspicious = Suspicious::orderBy('id','desc')->simplePaginate(10);
			return view('suspiciouspolice',['suspicious' => $suspicious]);
    }
//add functions to add data to mysql
    public function add(Request $request ){
$this->validate($request, [  
    'title' => 'required',  
    'name' => 'required',
    'alias' => 'required',
    'identification' => 'required',
    'type' => 'required',
    'gender' => 'required',
    'residence' => 'required',
    'dob' => 'required',
    'offence' => 'required',
    'officerbadge' => 'required',
    'dateofcrime' => 'required',
    'officername' => 'required',
    'crimedescription' => 'required',
    'fingerprinttaker' => 'required',
    'datefingerprinttaken' => 'required',
    'arrestmethod' => 'required',
    'custody' => 'required',
    'condition' => 'required',
    'admittedby' => 'required',
    'cell' => 'required',
    //'PHOTO'=>'required'
    ]);


//return 'Validation Pass';
$suspicious = new Suspicious;
$suspicious->title = $request->input('title');
$suspicious->name = $request->input('name');
$suspicious->alias = $request->input('alias');
$suspicious->identification = $request->input('identification');
$suspicious->type = $request->input('type');
$suspicious->gender = $request->input('gender');
$suspicious->residence = $request->input('residence');
$suspicious->dob = $request->input('dob');
$suspicious->offence = $request->input('offence');
$suspicious->officerbadge = $request->input('officerbadge');
$suspicious->dateofcrime = $request->input('dateofcrime');
$suspicious->officername = $request->input('officername');
$suspicious->crimedescription = $request->input('crimedescription');
$suspicious->fingerprinttaker = $request->input('fingerprinttaker');
$suspicious->datefingerprinttaken = $request->input('datefingerprinttaken');
$suspicious->arrestmethod = $request->input('arrestmethod');
$suspicious->custody = $request->input('custody');
$suspicious->condition = $request->input('condition');
$suspicious->admittedby = $request->input('admittedby');
$suspicious->cell = $request->input('cell');

//$suspicious->image=$request->input('image'); <- for image uplaod
$this->validate($request, [
           'f' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $imageName = time().'.'.$request->f->getClientOriginalExtension();
       $request->f->move(public_path('f'), $imageName);
       $suspicious->f = $imageName;
$this->validate($request, [
          'r' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    $imageName = time().'.'.$request->r->getClientOriginalExtension();
    $request->r->move(public_path('r'), $imageName);
    $suspicious->r = $imageName;
$this->validate($request, [
        'm' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

  $imageName = time().'.'.$request->m->getClientOriginalExtension();
  $request->m->move(public_path('m'), $imageName);
  $suspicious->m= $imageName;



 

$suspicious->save();
return redirect('/suspiciouspolice')->with('info','Entry Saved Successfully')
->with('path',$imageName)

;




    }



    //updating the database
        public function update($id){
           $suspicious = Suspicious::find($id);
           return view('update1',['suspicious' => $suspicious]);
        }


        //edit
        public function edit(Request $request,$id){
         $this->validate($request, [ 
            'title' => 'required',   
            'name' => 'required',
            'alias' => 'required',
            'identification' => 'required',
            'type' => 'required',
            'gender' => 'required',
            'residence' => 'required',
            'dob' => 'required',
            'offence' => 'required',
            'officerbadge' => 'required',
            'dateofcrime' => 'required',
            'officername' => 'required',
            'crimedescription' => 'required',
            'fingerprinttaker' => 'required',
            'datefingerprinttaken' => 'required',
            'arrestmethod' => 'required',
            'custody' => 'required',
            'condition' => 'required',
            'admittedby' => 'required',
            'cell' => 'required',
            


    ]);
$data = array(
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'alias' => $request->input('alias'),
            'identification' => $request->input('identification'),
            'type' => $request->input('type'),
            'gender' => $request->input('gender'),
            'residence' => $request->input('residence'),
            'dob' => $request->input('dob'),
            'offence' => $request->input('offence'),
            'officerbadge' => $request->input('officerbadge'),
            'dateofcrime' => $request->input('dateofcrime'),
            'officername' => $request->input('officername'),
            'crimedescription' => $request->input('crimedescription'),
            'fingerprinttaker' => $request->input('fingerprinttaker'),
            'datefingerprinttaken' => $request->input('datefingerprinttaken'),
            'arrestmethod' => $request->input('arrestmethod'),
            'custody' => $request->input('custody'),
            'condition' => $request->input('condition'),
            'admittedby' => $request->input('admittedby'),
            'cell' => $request->input('cell'),


	);
Suspicious::where('id',$id)
->update($data);
return redirect('/suspiciouspolice')->with('info','Updated ');
        }

//upload

       // public function upload(){

         

       // }

        //read
  public function read($id){
    // return $id;
$suspicious = Suspicious::find($id);           
          return view('read1',['suspicious' => $suspicious]);
        }


        //delete
 public function delete($id){
    Suspicious::where('id',$id)->delete();
return redirect('/suspiciouspolice')->with('info','Entry Deleted  Successfully');
 }
}
