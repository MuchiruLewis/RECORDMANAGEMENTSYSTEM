
 <div class="container">
  <div class="row"> </div>
  
  <div class="col-md-6"> 
  
  
  
  
  <form class="form-horizontal" method="head" action="{{url('postedit', array($post->id))}} 
  ">
  
  {{csrf_field()}}
  
    <fieldset>
      <legend>UPDATE OB REGISTER</legend>
  
  
  @if(count($errors) >0)
  @foreach($errors->all() as $error)
  
  
  <div class="alert alert-danger">
  
  {{$error}} 
  </div>
  
  
  
  @endforeach
  @endif
  
  
  
  
  
  
     
  
     
  
      
  
  
  
  
  
  
      <div class="form-group">
        
         
           
      
       

        <div class="col-md-12">
          <strong>TITLE :</strong>
          <textarea class="form-control" name="title" rows="2" cols="80">{{$post->title}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>REPORTINGDATE:</strong>
          <textarea class="form-control" name="Reportingdate" rows="2" cols="80">{{$post->Reportingdate}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Reportername :</strong>
          <textarea class="form-control" name="Reportername" rows="2" cols="80">{{$post->Reportername}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>physicaladdress :</strong>
          <textarea class="form-control" name="physicaladdress" rows="2" cols="80">{{$post->physicaladdress}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>IDENTIFICATION :</strong>
          <textarea class="form-control" name="identification" rows="2" cols="80">{{$post->identification}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>email :</strong>
          <textarea class="form-control" name="email" rows="2" cols="80">{{$post->email}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>phonenumber :</strong>
          <textarea class="form-control" name="phonenumber" rows="2" cols="80">{{$post->phonenumber}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Reporttype :</strong>
          <textarea class="form-control" name="Reporttype" rows="2" cols="80">{{$post->Reporttype}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Policestation :</strong>
          <textarea class="form-control" name="Policestation" rows="2" cols="80">{{$post->Policestation}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Recordedby :</strong>
          <textarea class="form-control" name="Recordedby" rows="2" cols="80">{{$post->Recordedby}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Occurredon :</strong>
          <textarea class="form-control" name="Occurredon" rows="2" cols="80">{{$post->Occurredon}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Locationofoccurrence :</strong>
          <textarea class="form-control" name="Locationofoccurence" rows="2" cols="80">{{$post->Locationofoccurence}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Crimedescription :</strong>
          <textarea class="form-control" name="Crimedescription" rows="8" cols="80">{{$post->Crimedescription}}</textarea>
        </div>

        <div class="col-md-12">
          <strong>Policecomments :</strong>
          <textarea class="form-control" name="Policecomments" rows="8" cols="80">{{$post->Policecomments}}</textarea>
        </div>

       
 
 
 
      
     
  
  
  
  
  
  
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
           
          <button type="submit" class="btn btn-primary">Update </button>
  
          <a href="{{url ('/posts.Index') }}" class="btn btn-primary"> Back </a>
  
  
        </div>
      </div>
    </fieldset>
  </form>
  
  
  </div>
  </div>
  
  
  
  
  
  