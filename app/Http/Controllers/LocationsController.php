<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LocationsController extends Controller
{
	public function __construct() {
		// $this->locations = new entry();
	}


    //display data
	public function home(){
		$locations = Locations::orderBy('id','desc')->simplePaginate(10);
			return view('sos',['locations' => $locations]);
    }
//add functions to add data to mysql
    public function add(Request $request ){
$this->validate($request, [    
    'name' => 'required',
    'identification' => 'required',
    'phonenumber' => 'required',
    'lat' => 'required',
    'lng' => 'required',
    'description' => 'required',
    'location_status' => 'required'

    ]);


//return 'Validation Pass';
$locations = new Locations;
$locations->name = $request->input('name');
$locations->identification = $request->input('identification');
$locations->phonenumber= $request->input('phonenumber');
$locations->lat = $request->input('lat');
$locations->lng = $request->input('lng');
$locations->description = $request->input('description');
$locations->location_status = $request->input('location_status');




 

$locations->save();
return redirect('/sos')->with('info','SAVED');




    }



    //updating the database
        public function update($id){
           $locations = Locations::find($id);
           return view('sos.update',['locations' => $locations]);
        }


        //edit
        public function edit(Request $request,$id){
         $this->validate($request, [    
            'name' => 'required',
            'identification' => 'required',
            'phonenumber' => 'required',
             'lat' => 'required',
            'lng' => 'required',
            'description' => 'required',
            'location_status' => 'required'


    ]);
$data = array(
            'name' => $request->input('name'),
            'identification' => $request->input('identification'),
            'phonenumber' => $request->input('phonenumber'),
            'lat' => $request->input('lat'),
            'lng' => $request->input('lng'),
            'description' => $request->input('description'),
            'location_status' => $request->input('location_status')


	);
Locations::where('id',$id)
->update($data);
return redirect('/sos')->with('info','UPDATED');
        }

//upload

       // public function upload(){

         

       // }

        //read
  public function read($id){
    // return $id;
$locations = Locations::find($id);           
          return view('sos.read',['locations' => $locations]);
        }


        //delete
 public function delete($id){
    Locations::where('id',$id)->delete();
return redirect('/sos')->with('info','DELETED');
 }
}
