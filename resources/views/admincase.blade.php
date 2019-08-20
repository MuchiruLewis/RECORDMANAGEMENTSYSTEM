@extends('layouts.admin')
@section('content')

 
<div class="container">
<div class="row">

<legend> ASSIGN CASES</legend>



<div class="row">
<div class="col-md-6 col-lg-6">

@if(session('info'))
<div class=" col-mg-10 alert alert-success"> 
{{session('info')}}

</div>
@endif

</div>
</div>


<table class="table table-striped table-hover ">
  <thead>


 
    <tr>
      
      <th>OB NUMBER</th>
      <th>CASE NUMBER</th>
      <th>CASE CONDITION</th>
      
     
     
    </tr>
  </thead>
  <tbody>
   @if(count($adminob)> 0)
     @foreach($adminob->all() as $adminob)

    <tr>
      
      <td>{{ $adminob->title}}</td>
      <td>{{ $adminob->CaseNo}}</td>
      <td>{{ $adminob->caseprogress}}</td>
     
      <td>{{strip_tags(substr($adminob->adminob,0,50)) }} 


      {{
    
        strip_tags(strlen($adminob->adminob)) >50 ? "...." : ""

 

      }} </td>
      <td>   

      <a href='{{url("/adminupdate/{$adminob->id}")}}''      class ="label label-success">UPDATE</a>|
 
        <a   href='{{url("/admindelete/{$adminob->id}")}}''      class ="label label-info">DELETE</a>|


      </td>

    </tr>

    @endforeach
  @endif
  </tbody>
</table> 









</div>

</div>
 
 
 @endsection


