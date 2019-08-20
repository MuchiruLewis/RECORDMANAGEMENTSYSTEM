@extends('layouts.police')
@section('content')

 
<div class="container">
<div class="row">

<legend> SOS ALERTS</legend>



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
      
      <th>NAME</th>
      <th>PHONENUMBER</th>
      <th>LAT</th>
      <th>LNG</th>
      <th>DESCRIPTION</th>
      <th>REPORTDATE</th>
     
    </tr>
  </thead>
  <tbody>
   @if(count($locations)> 0)
     @foreach($locations->all() as $locations)

    <tr>
      
      <td>{{ $locations->name}}</td>
      <td>{{ $locations->phonenumber}}</td>
      <td>{{ $locations->lat}}</td>
      <td>{{ $locations->lng}}</td>
      <td>{{ $locations->description}}</td>
      <td>{{ $locations->created_at}}</td>
      <td>{{strip_tags(substr($locations->locations,0,50)) }} 


      {{
    
        strip_tags(strlen($locations->locations)) >50 ? "...." : ""

 

      }} </td>
      <td>   <a href='{{url("/read/{$locations->id}") }} ''
      class=" label label-primary">READ</a>|

      <a href='{{url("/update/{$locations->id}")}}''      class ="label label-success">UPDATE</a>|
 
        <a   href='{{url("/delete/{$locations->id}")}}''      class ="label label-info">DELETE</a>|


      </td>

    </tr>

    @endforeach
  @endif
  </tbody>
</table> 









</div>

</div>
 
 
 @endsection


