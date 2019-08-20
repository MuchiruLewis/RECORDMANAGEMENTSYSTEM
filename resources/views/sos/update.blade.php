 
 @include('inc.header')
 <div class="container">
 <div class="row"> </div>
 
 <div class="col-md-10"> 
 
 
 
 
 <form class="form-horizontal" method="post" action="{{url('/edit', array($locations->id))}} 
 ">
 
 {{csrf_field()}}
 
   <fieldset>
     <legend>UPDATE CONTENTS</legend>
 
 
 @if(count($errors) >0)
 @foreach($errors->all() as $error)
 
 
 <div class="alert alert-danger">
 
 {{$error}} 
 </div>
 
 
 
 @endforeach
 @endif
 
 
 
 
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Name</label>
       <div class="col-lg-10">
         <input type="text" name="name" class="form-control"  value="<?php echo  $locations->name; ?>" id="inputEmail" placeholder="">
       </div>
     </div>
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">IDENTIFICATION</label>
       <div class="col-lg-10">
         <input type="text" name="identification" class="form-control"  value="<?php echo  $locations->identification; ?>" id="inputEmail" placeholder="">
       </div>
     </div>
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">PHONENUMBER</label>
       <div class="col-lg-10">
         <input type="text" name="phonenumber" class="form-control"  value="<?php echo  $locations->phonenumber; ?>" id="inputEmail" placeholder="" >
       </div>
     </div>
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">LATTITUDE</label>
       <div class="col-lg-10">
         <input type="text" name="lat" class="form-control"  value="<?php echo  $locations->lat; ?>" id="inputEmail" placeholder="" readonly>
       </div>
     </div>
     <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">LONGITUDE</label>
        <div class="col-lg-10">
          <input type="text" name="lng" class="form-control"  value="<?php echo  $locations->lng; ?>" id="inputEmail" placeholder="" readonly>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">SITUATION</label>
        <div class="col-lg-10">
          <input type="text" name="description" class="form-control"  value="<?php echo  $locations->description; ?>" id="inputEmail" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">LOCATION_STATUS</label>
        <div class="col-lg-10">
          <input type="text" name="location_status" class="form-control"  value="<?php echo  $locations->location_status; ?>" id="inputEmail" placeholder="">
        </div>
      </div>
 
 
     
    
 
 
 
 
 
 
     <div class="form-group">
       <div class="col-lg-10 col-lg-offset-2">
          
         <button type="submit" class="btn btn-primary">Update </button>
 
         <a href="{{url ('/sos') }}" class="btn btn-primary"> Back </a>
 
 
       </div>
     </div>
   </fieldset>
 </form>
 
 
 </div>
 </div>
 
 
 
 
