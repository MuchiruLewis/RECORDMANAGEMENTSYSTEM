@extends('layouts.admin')
@section('content')

<div class="content mt-3">


    <div class="col-lg-12">
        <div class="card">
        
        
          <div class="card-header">Nairobi Central Police Station Case Builder  </div>
          <div class="card-body card-block">
            <form action="<?php echo route('admincasecreate.store') ?>" method="post">
            <?php echo csrf_field()  ?>

             




            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">Case Number</div>

            <input type="text" size="130px" name="CaseNo" readonly="readonly" value="<?php 
            function gen_random_string($length=10)
               {
                   $chars ="1234567890";
                   $final_rand ='CASE/JUNE/2019/';
                  for($i=0;$i<$length; $i++)
                      {
                          $final_rand .= $chars[ rand(0,strlen($chars)-1)];
                       }
        return $final_rand;
    }
    echo gen_random_string()."\n"; //generates a string 
    ?>" />
    
  </div>
</div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">OB Number</div>
        <input type="title" id="username3" name="reportingname" class="form-control">
        <div class="input-group-addon"><i class="fa fa-user"></i></div>
    </div>
</div>

<div class="row form-group">
                  
    <div class="input-group-addon">Build Case</div>
        <div class="col-13 col-md-10">
        <select name="cases" id="sos_situation"  class="form-control">
        <option value="0">Please select</option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
       
        
  </select>
  
</div>
<div class="input-group-addon"><i class="fa fa-pencil"></i></div>
</div>





           



           
            
            <div class="row form-group">
                  
                    <div class="input-group-addon">Crime Category</div>
                        <div class="col-13 col-md-10">
                        <select name="reporttype" id="sos_situation"  class="form-control">
                        <option value="0">Please select</option>
                        <option value="ROAD ACCIDENT">ROAD ACCIDENT</option>
                        <option value="ARMED ROBBERY">ARMED ROBBERY</option>
                        <option value="TERRORIST ATTACK">TERRORIST ATTACK</option>
                        <option value="RIOT ATTACK">RIOT ATTACK</option>
                        
                  </select>
                  
                </div>
                <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
              </div>


              <div class="row form-group">
                  
                <div class="input-group-addon">CASE PROGRESS</div>
                    <div class="col-13 col-md-10">
                    <select name="caseprogress" id="sos_situation"  class="form-control">
                    <option value="0">Please select</option>
                    <option value="OPEN">OPEN</option>
                    <option value="CLOSED">CLOSED</option>
                    
                    
              </select>
              
            </div>
            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
          </div>
        
     

            

           
                                                                                 
           

                <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">Investigator</div>
                      <input type="text" id="investigator" name="investigator" class="form-control">
                      <div class="input-group-addon"><i class=" fa fa-location-arrow"></i></div>
                    </div>
                </div>
    


              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">CRIME DESCRIPTION</div>
                  
                  <textarea class="form-control" name="crimedescription" rows="2" cols="80"></textarea>
                  <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">REPORT</div>
                  
                  <textarea class="form-control" name="Report" rows="2" cols="80"></textarea>
                  <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                </div>
              </div>

           


              <div class="form-actions form-group">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
               </div>
               
            </form>
          </div>
        </div>
      </div>








</div>























@endsection