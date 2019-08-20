<?php

namespace App\Http\Controllers;

//use App\Models\Suspicious;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WelcomeController extends Controller
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
    'name' => 'required',
    'phonenumber' => 'required',
    'location' => 'required',
    'date' => 'required',
    'situation' => 'required'
    //'PHOTO'=>'required'
    ]);


//return 'Validation Pass';
$suspicious = new Suspicious;
$suspicious->name = $request->input('name');
$suspicious->phonenumber = $request->input('phonenumber');
$suspicious->location = $request->input('location');
$suspicious->date = $request->input('date');
$suspicious->situation = $request->input('situation');
//$suspicious->image=$request->input('image'); <- for image uplaod
$this->validate($request, [
           'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $imageName = time().'.'.$request->photo->getClientOriginalExtension();
       $request->photo->move(public_path('photo'), $imageName);
       $suspicious->photo = $imageName;
$this->validate($request, [
          'photo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    $imageName = time().'.'.$request->photo2->getClientOriginalExtension();
    $request->photo2->move(public_path('photo2'), $imageName);
    $suspicious->photo2 = $imageName;



 

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
            'name' => 'required',
            'phonenumber' => 'required',
            'location' => 'required',
            'date' => 'required',
            'situation' => 'required'
            


    ]);
$data = array(
            'name' => $request->input('name'),
            'phonenumber' => $request->input('phonenumber'),
            'location' => $request->input('location'),
            'date' => $request->input('date'),
            'situation' => $request->input('situation')


	);
Suspicious::where('id',$id)
->update($data);
return redirect('/suspiciouspolice')->with('info','Entry  Updated Successfully');
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
