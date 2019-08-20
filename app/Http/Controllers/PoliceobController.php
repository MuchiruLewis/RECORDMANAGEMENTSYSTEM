<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Policeob;

class PoliceobController extends Controller
{
  public function index()
  {
    return view('policeob_index', compact('policeob'));

  }

  public function create()
      {
          return view('policeob_index');
      }
  //insert to db here
  public function store(Request $request)
  {
    
    $policeob = new Policeob();
    
    $policeob->title = $request->title;
    $policeob->Reportingdate = $request->reportingdate;
    $policeob->Reportername = $request->reportingname;
    $policeob->identification = $request->identification;
    $policeob->physicaladdress = $request->physicalname;
    $policeob->email = $request->email;
    $policeob->phonenumber = $request->phonenumber;
    $policeob->Reporttype = $request->reporttype;
    $policeob->Policestation = $request->policestation;
    $policeob->Recordedby = $request->recordedby;
    $policeob->Occurredon = $request->occurrence;
    $policeob->Locationofoccurence = $request->locationofoccurence;
    $policeob->Crimedescription = $request->crimedescription;
    $policeob->save();
    
    return redirect()->route('policeob.index');
  }

public function edit($id)
{
   
}

public function update(Request $request, $id)
{
    
}

public function destroy($id)
{
 
}
    
  
  

}
?>