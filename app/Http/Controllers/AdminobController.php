<?php

namespace App\Http\Controllers;

use App\Models\Adminob;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminobController extends Controller
{
	public function __construct() {
		// $this->suspicious = new entry();
	}


    //display data
	public function home(){
		$adminob = Adminob::orderBy('id','desc')->simplePaginate(10);
			return view('admincase',['adminob' => $adminob]);
    }




    //updating the database
        public function update($id){
           $adminob = Adminob::find($id);
           return view('adminupdate',['adminob' => $adminob]);
        }


        //edit
        public function edit(Request $request,$id){
         $this->validate($request, [ 
            'title' => 'required',   
            'cases' => 'required',
            'CaseNo' => 'required',
            'Investigator' => 'required',
            'caseprogress' => 'required',
            'Report' => 'required',


    ]);
$data = array(
            'title' => $request->input('title'),
            'cases' => $request->input('cases'),
            'CaseNo' => $request->input('CaseNo'),
            'Investigator' => $request->input('Investigator'),
            'caseprogress' => $request->input('caseprogress'),
            'Report' => $request->input('Report'),
            

            


	);
Adminob::where('id',$id)
->update($data);
return redirect('/admincase')->with('info','Updated ');
        }

//upload

       // public function upload(){

         

       // }

        //read
  public function read($id){
    // return $id;
$adminob = Adminob::find($id);           
          return view('adminread',['adminob' => $adminob]);
        }


        //delete
 public function delete($id){
    Adminob::where('id',$id)->delete();
return redirect('/admincase')->with('info','Entry Deleted  Successfully');
 }
}
