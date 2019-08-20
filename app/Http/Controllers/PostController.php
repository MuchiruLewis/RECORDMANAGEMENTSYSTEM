<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request)
    {
      $request->session()->put('search', $request
              ->has('search') ? $request->get('search') : ($request->session()
              ->has('search') ? $request->session()->get('search') : ''));

              $request->session()->put('field', $request
                      ->has('field') ? $request->get('field') : ($request->session()
                      ->has('field') ? $request->session()->get('field') : 'title'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

      $posts = new Post();
            $posts = $posts->where('title', 'like', '%' . $request->session()->get('search') . '%')
                ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(5);
            if ($request->ajax()) {
              return view('posts.index', compact('posts'));
            } else {
              return view('posts.ajax', compact('posts'));
            }
    }

    public function create(Request $request)
    {
       
    }
    public function show(Request $request, $id)
    {
        if($request->isMethod('get')) {
          return view('posts.detail',['post' => Post::find($id)]);
        }
    }

    public function update($id){
      $post = Post::find($id);
      return view('posts.Form',['post' => Post::find($id)]);
    }
    
    
    //edit
    public function edit(Request $request,$id){
    $this->validate($request, [    
     // 'id' => 'required',
      'identification' => 'required',
      'title' => 'required',
      'Reportingdate' => 'required',
      'Reportername' => 'required',
      'pyhsicaladdress' => 'required',
      'email' => 'required',
      'phonenumber' => 'required',
      'Reporttype' => 'required',
      'Policestation' => 'required',
      'Recordedby' => 'required',
      'Occurredon' => 'required',
      'Locationofoccurence' => 'required',
      'Crimedescription' => 'required',
      'Policecomments' => 'required',
     // 'cases' => 'required',
     // 'CaseNo' => 'required',
     // 'Investigator' => 'required',
    //  'Report' => 'required',
    //  'created_at' => 'required',
    //  'updated_at' => 'required',
    
    
    ]);
    $data = array(
      
    //  'id' => $request->input('id'),
      'identification' => $request->input('identification'),
      'title' => $request->input('title'),
      'Reportingdate' => $request->input('Reportingdate'),
      'Reportername' => $request->input('Reportername'),
      'physicaladdress' => $request->input('physicaladdress'),
      'email' => $request->input('email'),
      'phonenumber' => $request->input('phonenumber'),
      'Reporttype' => $request->input('Reporttype'),
      'Policestation' => $request->input('Policestation'),
      'Recordedby' => $request->input('Recordedby'),
      'Occurredon' => $request->input('Occurredon'),
      'Locationofoccurence' => $request->input('Locationofoccurence'),
      'Crimedescription' => $request->input('Crimedescription'),
      'Policecomments' => $request->input('Policecomments'),
   //   'cases' => $request->input('cases'),
   //   'CaseNo' => $request->input('CaseNo'),
     // 'Investigator' => $request->input('Investigator'),
     // 'Report' => $request->input('Report'),
      //'created_at' => $request->input('created_at'),
     // 'updated_at' => $request->input('updated_at'),
    
    );
    Post::where('id',$id)
    ->update($data);
    return redirect('posts/Index');
    }


    
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('posts');
    }
}