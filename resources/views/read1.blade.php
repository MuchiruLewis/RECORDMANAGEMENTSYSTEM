 @include('inc.header')




<div class="container">
<div class="row">

<legend> Read data here</legend>



 




<div class="jumbotron">

<img    style=" height: 325px; width: 350px" class="lead  text-center  img-fluid   "  alt="Responsive image" src="{{ asset('f/' . $suspicious->f) }}" />

<img    style=" height: 325px; width: 340px" class="lead  text-center  img-fluid   "  alt="Responsive image" src="{{ asset('r/' . $suspicious->r) }}" />

<img    style=" height: 325px; width: 350px" class="lead  text-center  img-fluid   "  alt="Responsive image" src="{{ asset('m/' . $suspicious->m) }}" />


<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">CULPRIT NUMBER</a></li>
  <li><a href="#profile" data-toggle="tab">CULPRIT NAME</a></li>
  <li><a href="#profile1" data-toggle="tab">CULPRIT ALIAS</a></li>
  <li><a href="#profile2" data-toggle="tab">IDENTEFICATION NUMBER</a></li>
  <li><a href="#profile3" data-toggle="tab">CULPRIT TYPE</a></li>
  <li><a href="#profile4" data-toggle="tab">CULPRIT GENDER</a></li>
  <li><a href="#profile5" data-toggle="tab">CULPRITS RESIDENCE</a></li>
  <li><a href="#profile6" data-toggle="tab">CULPRITS DOB</a></li>
  <li><a href="#profile7" data-toggle="tab">CULPRIT OFFENCE</a></li>
  <li><a href="#profile8" data-toggle="tab">OFFICERS BADGE</a></li>
  <li><a href="#profile9" data-toggle="tab">DATE OF CRIME</a></li>
  <li><a href="#profile10" data-toggle="tab">ARRESTING OFFICERS NAME</a></li>
  <li><a href="#profile11" data-toggle="tab">CRIME DESCRIPTION</a></li>
  <li><a href="#profile12" data-toggle="tab">FINGERPRINT TAKER</a></li>
  <li><a href="#profile13" data-toggle="tab">DATE FINGERPRINT TAKEN</a></li>
  <li><a href="#profile14" data-toggle="tab">ARREST METHOD</a></li>
  <li><a href="#profile15" data-toggle="tab">CUSTODY</a></li>
  <li><a href="#profile16" data-toggle="tab">CULPRITS CONDITION</a></li>
  <li><a href="#profile17" data-toggle="tab">ADMITTED BY</a></li>
  <li><a href="#profile18" data-toggle="tab">CELL NUMBER</a></li>
  
  
  
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
   <h4>  {{ $suspicious->title}} </h4>
  </div>
  <div class="tab-pane fade" id="profile">
    <h4> {{ $suspicious->name}} </h4>
  </div>
  <div class="tab-pane fade" id="profile1">
    <h4> {{ $suspicious->alias}} </h4>
  </div>
  <div class="tab-pane fade" id="profile2">
    <h4> {{ $suspicious->identification}} </h4>
  </div>
  <div class="tab-pane fade" id="profile3">
    <h4> {{ $suspicious->type}} </h4>
  </div>
  <div class="tab-pane fade" id="profile4">
    <h4> {{ $suspicious->gender}} </h4>
  </div>
  <div class="tab-pane fade" id="profile5">
    <h4> {{ $suspicious->residence}} </h4>
  </div>
  <div class="tab-pane fade" id="profile6">
    <h4> {{ $suspicious->dob}} </h4>
  </div>
  <div class="tab-pane fade" id="profile7">
    <h4> {{ $suspicious->offence}} </h4>
  </div>
  <div class="tab-pane fade" id="profile8">
    <h4> {{ $suspicious->officerbadge}} </h4>
  </div>
  <div class="tab-pane fade" id="profile9">
    <h4> {{ $suspicious->dateofcrime}} </h4>
  </div>
  <div class="tab-pane fade" id="profile10">
    <h4> {{ $suspicious->officername}} </h4>
  </div>
  <div class="tab-pane fade" id="profile11">
    <h4> {{ $suspicious->crimedescription}} </h4>
  </div>
  <div class="tab-pane fade" id="profile12">
    <h4> {{ $suspicious->fingerprinttaker}} </h4>
  </div>
  <div class="tab-pane fade" id="profile13">
    <h4> {{ $suspicious->datefingerprinttken}} </h4>
  </div>
  <div class="tab-pane fade" id="profile14">
    <h4> {{ $suspicious->arrestmethod}} </h4>
  </div>
  <div class="tab-pane fade" id="profile15">
    <h4> {{ $suspicious->custody}} </h4>
  </div>
  <div class="tab-pane fade" id="profile16">
    <h4> {{ $suspicious->condition}} </h4>
  </div>
  <div class="tab-pane fade" id="profile17">
    <h4> {{ $suspicious->admittedby}} </h4>
  </div>
  <div class="tab-pane fade" id="profile18">
    <h4> {{ $suspicious->cell}} </h4>
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