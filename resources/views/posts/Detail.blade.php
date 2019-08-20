




<div class="container">
<div class="row">

<legend> DETAILS</legend>



 




<div class="jumbotron">



<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">OB NUMBER</a></li>&nbsp;&nbsp;&nbsp;
  <li><a href="#profile" data-toggle="tab">IDENTIFICATION</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile4" data-toggle="tab">REPORTING DATE</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile5" data-toggle="tab">REPORTER</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile6" data-toggle="tab">PHYSICAL ADDRESS</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile7" data-toggle="tab">EMAIL</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile8" data-toggle="tab">PHONENUMBER</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile9" data-toggle="tab">REPORT TYPE</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile10" data-toggle="tab">POLICE STATION</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile11" data-toggle="tab">RECORDED BY</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile12" data-toggle="tab">OCCURRED ON</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile13" data-toggle="tab">LOCATION OF CRIME</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile14" data-toggle="tab">INCIDENT DESCRIPTION</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="#profile15" data-toggle="tab">POLICE NOTES</a></li>&nbsp;&nbsp;&nbsp;&nbsp; 
  
  
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
   <h4>  {{ $post->title}} </h4>
  </div>
  <div class="tab-pane fade" id="profile">
    <h4> {{ $post->identification}} </h4>
  </div>
  <div class="tab-pane fade" id="profile4">
    <h4> {{ $post->Reportingdate}} </h4>
  </div>
  <div class="tab-pane fade" id="profile5">
    <h4> {{ $post->Reportername}} </h4>
  </div>
  <div class="tab-pane fade" id="profile6">
    <h4> {{ $post->physicaladdress}} </h4>
  </div>
  <div class="tab-pane fade" id="profile7">
    <h4> {{ $post->email}} </h4>
  </div>
  <div class="tab-pane fade" id="profile8">
    <h4> {{ $post->phonenumber}} </h4>
  </div>
  <div class="tab-pane fade" id="profile9">
    <h4> {{ $post->Reporttype}} </h4>
  </div>
  <div class="tab-pane fade" id="profile10">
    <h4> {{ $post->Policestation}} </h4>
  </div>
  <div class="tab-pane fade" id="profile11">
    <h4> {{ $post->Recordedby}} </h4>
  </div>
  <div class="tab-pane fade" id="profile12">
    <h4> {{ $post->Occurredon}} </h4>
  </div>
  <div class="tab-pane fade" id="profile13">
    <h4> {{ $post->Locationofoccurence}} </h4>
  </div>
  <div class="tab-pane fade" id="profile14">
    <h4> {{ $post->Crimedescription}} </h4>
  </div>
  <div class="tab-pane fade" id="profile15">
    <h4> {{ $post->Policecomments}} </h4>
  </div>

  <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
  
</div>
































   
  

  
  

</div>




</div>
</div>


 @include('inc.footer')