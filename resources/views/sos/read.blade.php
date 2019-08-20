@include('inc.header')




<div class="container">
<div class="row">

<legend> FULL DETAILS DISPLAYED HERE</legend>



 




<div class="jumbotron">




<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">DETAILS</a></li>
  
  <li><a href="#profile6" data-toggle="tab">LOCATION_STATUS</a></li>
  
  
  
  
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
   <h4>NAME:  {{ $locations->name}} </h4>
   <h4>ID NO: {{ $locations->identification}} </h4>
   <h4>PHONE-NUMBER: {{ $locations->phonenumber}} </h4>
   <h4>LAT: {{ $locations->lat}} </h4>
   <h4>LNG: {{ $locations->lng}} </h4>
   <h4>SITUATION: {{ $locations->description}} </h4>
  </div>
 
  <div class="tab-pane fade" id="profile6">
        <h4> {{ $locations->location_status}} </h4>
</div>
  <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
  
</div>
































   
  

  
  

</div>





</div>
<div class="form-group">
        <div class="col-lg-10 col-lg-offset-0">
           
          
  
          <a href="{{url ('/sos') }}" class="btn btn-primary"> Back </a>
  
  
        </div>
      </div>
</div>

