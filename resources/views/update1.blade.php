 
 @include('inc.header')
<div class="container">
<div class="row"> </div>

<div class="col-md-6"> 




<form class="form-horizontal" method="post" action="{{url('/edit1', array($suspicious->id))}} 
">

{{csrf_field()}}

  <fieldset>
    <legend>Laravel crud application</legend>


@if(count($errors) >0)
@foreach($errors->all() as $error)


<div class="alert alert-danger">

{{$error}} 
</div>



@endforeach
@endif




     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">CULPRIT NO</label>
       <div class="col-lg-10">
       <input type="text" name="title" class="form-control"  value="<?php echo  $suspicious->title; ?>" id="inputEmail" placeholder="">
       </div>
      </div>




    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="name" class="form-control"  value="<?php echo  $suspicious->name; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Alias</label>
      <div class="col-lg-10">
        <input type="text" name="alias" class="form-control"  value="<?php echo  $suspicious->alias; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID</label>
      <div class="col-lg-10">
        <input type="text" name="identification" class="form-control"  value="<?php echo  $suspicious->identification; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">TYPE</label>
      <div class="col-lg-10">
        <input type="text" name="type" class="form-control"  value="<?php echo  $suspicious->type; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">GENDER</label>
      <div class="col-lg-10">
        <input type="text" name="gender" class="form-control"  value="<?php echo  $suspicious->gender; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Residence</label>
      <div class="col-lg-10">
        <input type="text" name="residence" class="form-control"  value="<?php echo  $suspicious->residence; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">dob</label>
      <div class="col-lg-10">
        <input type="text" name="dob" class="form-control"  value="<?php echo  $suspicious->dob; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Offence</label>
      <div class="col-lg-10">
        <input type="text" name="offence" class="form-control"  value="<?php echo  $suspicious->offence; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="officerbadge" class="form-control"  value="<?php echo  $suspicious->officerbadge; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">dateofcrime</label>
      <div class="col-lg-10">
        <input type="text" name="dateofcrime" class="form-control"  value="<?php echo  $suspicious->dateofcrime; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">OfficerName</label>
      <div class="col-lg-10">
        <input type="text" name="officername" class="form-control"  value="<?php echo  $suspicious->officername; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Crimedescription</label>
      <div class="col-lg-10">
        <input type="text" name="crimedescription" class="form-control"  value="<?php echo  $suspicious->crimedescription; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">fingerprinttaker</label>
      <div class="col-lg-10">
        <input type="text" name="fingerprinttaker" class="form-control"  value="<?php echo  $suspicious->fingerprinttaker; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">datefingerprinttaken</label>
      <div class="col-lg-10">
        <input type="text" name="datefingerprinttaken" class="form-control"  value="<?php echo  $suspicious->datefingerprinttaken; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Arrestmethod</label>
      <div class="col-lg-10">
        <input type="text" name="arrestmethod" class="form-control"  value="<?php echo  $suspicious->arrestmethod; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Custody</label>
      <div class="col-lg-10">
        <input type="text" name="custody" class="form-control"  value="<?php echo  $suspicious->custody; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Condition</label>
      <div class="col-lg-10">
        <input type="text" name="condition" class="form-control"  value="<?php echo  $suspicious->condition; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="admittedby" class="form-control"  value="<?php echo  $suspicious->admittedby; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Cell</label>
      <div class="col-lg-10">
        <input type="text" name="cell" class="form-control"  value="<?php echo  $suspicious->cell; ?>" id="inputEmail" placeholder="">
      </div>
    </div>







    <div class="form-group">
      
       
         
<label for="inputPassword" class="col-lg-2 control-label">Situation</label>

<div class="col-lg-10">
         <textarea name="situation"  class="form-control" placeholder ="DetailsPlease"> <?php echo  $suspicious->situation; ?>  </textarea>
      </div>
    </div>
    
   






    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
         
        <button type="submit" class="btn btn-primary">Update </button>

        <a href="{{url ('/suspiciouspolice') }}" class="btn btn-primary"> Back </a>


      </div>
    </div>
  </fieldset>
</form>


</div>
</div>





 @include('inc.footer')