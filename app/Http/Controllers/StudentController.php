<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller{
    public function index(){
        $users = student::all();
        return view ('student_index' , compact('users'));

    }
    public function create(){
        return view ('student_create');
    }

    // public function store (){
    //     print_r($_POST);
    // }

    public function store (Request $request){
        $users            = new student();
        $users->name      = $request->users_name;
        $users->email   = $request->student_email;
        $users->national_id   = $request->national_id;
        $users->role   = $request->role;
        $users->department   = $request->department;
        $users->status   = $request->status;
        $users->save();

        return redirect()->route('student.index');
    }

    public function update(Request $request ,$id){
        # code...
        $users = student::find($id);
        $users->id      = $request->id;
      //  $users->lat   = $request->lat;
      //  $users->lng  = $request->lng;
      //  $users->location_status   = $request->location_status;
     //   $users->OBNo   = $request->OBNo;
        $users->title  = $request->title;
        $users->Reportingdate  = $request->Reportingdate;
        $users->Reportername  = $request->Reportername;
      //  $users->physicaladdress  = $request->physicaladdress;
      //  $users->email  = $request->email;
      //  $users->phonenumber  = $request->phonenumber;
        $users->Reporttype  = $request->Reporttype;
      //  $users->Policestation  = $request->Policestation;
      //  $users->Recordedby  = $request->Recordedby;
        $users->Occurredon  = $request->Occurredon;
        $users->Locationofoccurence  = $request->Locationofoccurence;
        $users->Crimedescription  = $request->Crimedescription;
        $users->Policecomments  = $request->Policecomments;
        $users->cases  = $request->cases;
        $users->CaseNo  = $request->CaseNo;
        $users->Investigator  = $request->Investigator;
        $users->Report = $request->Report;
        $users->save();
       
        return redirect()->route('student.index');
    }

    public function edit($id){
        # code...
        $student = Student::find($id);
        return view('student_edit' , compact('student'));
    }

    public function destroy( $id ){
        # code...
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}

?>