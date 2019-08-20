 
 @include('inc.header')
 <div class="container">
 <div class="row"> </div>
 
 <div class="col-md-6"> 
 
 
 
 
 <form class="form-horizontal" method="post" action="{{url('/adminedit', array($adminob->id))}} 
 ">
 
 {{csrf_field()}}
 
   <fieldset>
     <legend>BUILD CASE</legend>
 
 
 @if(count($errors) >0)
 @foreach($errors->all() as $error)
 
 
 <div class="alert alert-danger">
 
 {{$error}} 
 </div>
 
 
 
 @endforeach
 @endif
 
 
 
 
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">OB NO</label>
        <div class="col-lg-10">
        <input type="text" name="title" class="form-control"  value="<?php echo  $adminob->title; ?>" id="inputEmail" placeholder="">
        </div>
       </div>
 
 
 
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">CASE NO</label>
       <div class="col-lg-10">
         <input type="text" name="CaseNo" class="form-control"  value="<?php echo  $adminob->CaseNo; ?>" id="inputEmail" placeholder="">
       </div>
     </div>
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">BUILD CASE</label>
       <div class="col-lg-10">
         <input type="text" name="cases" class="form-control"  value="<?php echo  $adminob->cases; ?>" id="inputEmail" placeholder="0=NO,1=YES">
       </div>
     </div>
 
     <div class="form-group">
       <label for="inputEmail" class="col-lg-3 control-label">INVESTIGATOR</label>
       <div class="col-lg-9">
         <input type="text" name="Investigator" class="form-control"  value="<?php echo  $adminob->Investigator; ?>" id="inputEmail" placeholder="">
       </div>
     </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Caseprogress</label>
      <div class="col-lg-10">
        <input type="text" name="caseprogress" class="form-control"  value="<?php echo  $adminob->Caseprogress; ?>" id="inputEmail" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Report</label>
      <div class="col-lg-10">
        <input type="text" column="10" name="Report" class="form-control"  value="<?php echo  $adminob->Report; ?>" id="inputEmail" placeholder="">
      </div>
    </div>
 
     
 
 
 
     <div class="form-group">
       <div class="col-lg-10 col-lg-offset-2">
          
         <button type="submit" class="btn btn-primary">Update </button>
 
         <a href="{{url ('/admincase') }}" class="btn btn-primary"> Back </a>
 
 
       </div>
     </div>
   </fieldset>
 </form>
 
 
 </div>
 </div>
 
 
 
 
 
  @include('inc.footer')