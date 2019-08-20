<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Addcalender;

class AddcalenderController extends Controller
{
  public function index()
  {
    return view('addcalender', compact('addcalender'));

  }

  public function create()
      {
          return view('addcalender');
      }
  //insert to db here
  public function store(Request $request)
  {
    
    $addcalender = new Addcalender();
    
    $addcalender->title = $request->title;
    $addcalender->start_date = $request->start_date;
    $addcalender->end_date = $request->end_date;
    
    
    $addcalender->save();
    
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