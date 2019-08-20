 
 @include('inc.header')
<div class="container">
<div class="row"> </div>

<div class="col-md-6"> 




<form  onsubmit="return  class="form-horizontal" method="POST" action="{{url('/insert')}}  
" enctype="multipart/form-data">

{{csrf_field()}}

  <fieldset>
    <legend>Create Product</legend>


@if(count($errors) >0)
@foreach($errors->all() as $error)


<div class="alert alert-danger">

{{$error}} 
</div>



@endforeach
@endif

   <div class="form-group">
         <label for="inputEmail" class="col-lg-2 control-label">NUMBER</label>
         <div class="col-lg-10">
         <input type="text" name="title" class="form-control" id="inputEmail" placeholder="" value="<?php 
         function gen_random_string($length=10)
            {
                $chars ="1234567890";
                $final_rand ='CULPRIT/APRIL/2019/';
               for($i=0;$i<$length; $i++)
                   {
                       $final_rand .= $chars[ rand(0,strlen($chars)-1)];
                    }
     return $final_rand;
 }
 echo gen_random_string()."\n"; //generates a string 
 ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="name" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ALIAS</label>
      <div class="col-lg-10">
        <input type="text" name="alias" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">IDENTIFICATION</label>
      <div class="col-lg-10">
        <input type="text" name="identification" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">TYPE</label>
      <div class="col-lg-10">
        <input type="text" name="type" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">GENDER</label>
      <div class="col-lg-10">
        <input type="text" name="gender" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">RESIDENCE</label>
      <div class="col-lg-10">
        <input type="text" name="residence" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">DOB</label>
      <div class="col-lg-10">
        <input type="date" name="dob" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">OFFENCE</label>
      <div class="col-lg-10">
        <input type="text" name="offence" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">OFFICERBADGE</label>
      <div class="col-lg-10">
        <input type="text" name="officerbadge" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">DATECRIME</label>
      <div class="col-lg-10">
        <input type="date" name="dateofcrime" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">officername</label>
      <div class="col-lg-10">
        <input type="text" name="officername" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Crimedescription</label>
      <div class="col-lg-10">
        <input type="text" name="crimedescription" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">fingerprinttaker</label>
      <div class="col-lg-10">
        <input type="text" name="fingerprinttaker" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">datefingerprinttaken</label>
      <div class="col-lg-10">
        <input type="date" name="datefingerprinttaken" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">arrestmethod</label>
      <div class="col-lg-10">
        <input type="text" name="arrestmethod" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

   

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Custody</label>
      <div class="col-lg-10">
        <input type="date" name="custody" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Condition</label>
      <div class="col-lg-10">
        <input type="text" name="condition" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">admittedby</label>
      <div class="col-lg-10">
        <input type="text" name="admittedby" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">CELL</label>
      <div class="col-lg-10">
        <input type="text" name="cell" class="form-control" id="inputEmail" placeholder="">
      </div>
    </div>



    
   
<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Upload</label>
      <div class="col-lg-10">
        <input type="file" name="f"  class="form-control" id="file" placeholder="">

        <input type="hidden" value="{{csrf_token()}}"  name=""       >
      </div>
    </div>
  
<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Upload</label>
      <div class="col-lg-10">
        <input type="file" name="r"  class="form-control" id="file" placeholder="">

        <input type="hidden" value="{{csrf_token()}}"  name=""       >
      </div>
    </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Upload</label>
      <div class="col-lg-10">
        <input type="file" name="m"  class="form-control" id="file" placeholder="">

        <input type="hidden" value="{{csrf_token()}}"  name=""       >
      </div>
    </div>





    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
         
        <button type="submit" class="btn btn-primary">Submit</button>

        <a href="{{url ('/suspiciouspolice') }}" class="btn btn-primary"> Back </a>


      </div>
    </div>
  </fieldset>
</form>


</div>
</div>





 @include('inc.footer')