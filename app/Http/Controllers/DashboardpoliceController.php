<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardpoliceController extends Controller
{
  public function index()
  {
      
      
      return view('dashboard_index', compact('dashboard'));

  }

  public function create()
      {
          return view('dashboard_index');
      }
  //insert to db here
  public function store(Request $request)
  {
    
   
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