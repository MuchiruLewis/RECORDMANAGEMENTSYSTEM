<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Policeobb;

class PoliceobbController extends Controller
{
  public function index()
  {
    return view('policeobb_index', compact('policeobb'));

  }

  public function create()
      {
          return view('policeobb_index');
      }
  //insert to db here
  public function store(Request $request)
  {
    
  

        $policeobb = new Policeobb();
        $policeobb->title = $request->title;
        $policeobb->name = $request->name;
        $policeobb->alias = $request->alias;
        $policeobb->identification = $request->identification;
        $policeobb->type = $request->type;
        $policeobb->gender = $request->gender;
        $policeobb->residence = $request->residence;
        $policeobb->dob = $request->dob;
        $policeobb->offence = $request->offence;
        $policeobb->officerbadge = $request->officerbadge;
        $policeobb->dateofcrime = $request->dateofcrime;
        $policeobb->officername = $request->officername;
        $policeobb->crimedescription = $request->crimedescription;
        $policeobb->fingerprinttaker = $request->fingerprinttaker;
        $policeobb->datefingerprinttaken = $request->datefingerprinttaken;
        $policeobb->arrestmethod = $request->arrestmethod;
        $policeobb->custody = $request->custody;
        $policeobb->condition = $request->condition;
        $policeobb->admittedby = $request->admittedby;
        $policeobb->cell = $request->cell;
        $policeobb->save();

        $this->validate($request, [
            'f' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 
        $imageName = time().'.'.$request->f->getClientOriginalExtension();
        $request->photo->move(public_path('f'), $imageName);
        $policeobb->f = $imageName;
 $this->validate($request, [
           'r' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
 
     $imageName = time().'.'.$request->r->getClientOriginalExtension();
     $request->r->move(public_path('r'), $imageName);
     $policeobb->r = $imageName;
 
     $this->validate($request, [
       'l' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);
 
 $imageName = time().'.'.$request->l->getClientOriginalExtension();
 $request->l->move(public_path('l'), $imageName);
 $policeobb->l = $imageName;
 
 
 
 




    
    return redirect()->route('policeobb.index');
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