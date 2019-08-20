@extends('layouts.police')
@section('content')
 
<div class="container">
<div class="row">

<legend> ARREST RECORD </legend>



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
      
      <th>CULPRIT NO</th>
      <th>OFFENDER</th>
      <th>OFFENCE</th>
      <th>DATE OF ARREST</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
   @if(count($suspicious)> 0)
     @foreach($suspicious->all() as $suspicious)

    <tr>
      
      <td>{{ $suspicious->title}}</td>
      <td>{{ $suspicious->name}}</td>
      <td>{{ $suspicious->offence}}</td>
      <td>{{ $suspicious->created_at}}</td>
      


      {{
    
        strip_tags(strlen($suspicious->situation)) >50 ? "...." : ""

 

      }} </td>
      <td>   <a href='{{url("/read1/{$suspicious->id}") }} ''
      class=" label label-primary">Read</a>|

      <a href='{{url("/update1/{$suspicious->id}")}}''      class ="label label-success">Update</a>|
      
 
        <a   href='{{url("/delete1/{$suspicious->id}")}}''      class ="label label-info">Delete</a>|


      </td>

    </tr>

    @endforeach
  @endif
  </tbody>
</table> 









</div>

</div>
 
@endsection


