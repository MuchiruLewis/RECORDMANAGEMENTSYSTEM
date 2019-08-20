<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admincasecreate;

class admincasecreateController extends Controller
{
  public function index()
  {
    return view('admincasecreate');

  }

  public function create()
      {
          return view('admincasecreate');
      }
  //insert to db here
  public function store(Request $request)
  {
    
    $admincasecreate = new admincasecreate();
    
    $admincasecreate->title = $request->title;
    $admincasecreate->CaseNo = $request->CaseNo;
    $admincasecreate->caseprogress = $request->caseprogress;
    $admincasecreate->investigator = $request->investigator;
    $admincasecreate->Report = $request->Report;
    $admincasecreate->cases = $request->cases;
    $admincasecreate->reporttype = $request->reporttype;
    $admincasecreate->crimedescription = $request->crimedescription;
   
    $admincasecreate->save();
    
    return redirect()->route('admincasecreate.index');
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