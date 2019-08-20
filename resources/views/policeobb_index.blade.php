@extends('layouts.police')
@section('content')

<div class="content mt-3">


    <div class="col-lg-12">
        <div class="card">
        
        
          <div class="card-header">Nairobi Central Police Station OB Entry </div>
          <div class="card-body card-block">
            <form action="<?php echo route('policeobb.store') ?>" method="post">
            <?php echo csrf_field()  ?>

            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">Culprit Serial Number</div>

            <input type="text" size="121px" name="title" readonly="readonly" value="<?php 
            function gen_random_string($length=10)
               {
                   $chars ="1234567890";
                   $final_rand ='CULPRIT/JUNE/2019/';
                  for($i=0;$i<$length; $i++)
                      {
                          $final_rand .= $chars[ rand(0,strlen($chars)-1)];
                       }
        return $final_rand;
    }
    echo gen_random_string()."\n"; //generates a string 
    ?>" />
    <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
  </div>
</div>

           

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Culprit Name</div>
                        <input type="text" id="username3" name="name" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
            </div>


            <div class="form-group">
                    <div class="input-group">
                            <div class="input-group-addon">Culprit Alias</div>
                            <input type="text" id="username3" name="alias" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
            </div>


            <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">Culprit IDNumber</div>
                      <input type="text" id="email3" name="identification" class="form-control">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                      <div class="input-group-addon">Culprit Type</div>
                      <input type="text" id="email3" name="type" class="form-control">
                      <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                </div>
            </div>

            <div class="form-group">
                    <div class="input-group">
                          <div class="input-group-addon">Culprit Gender</div>
                          <input type="text" id="email3" name="gender" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-male"></i></div>
                          <div class="input-group-addon"><i class="fa fa-female"></i></div>
                    </div>
                </div>
            
                <div class="form-group">
                        <div class="input-group">
                              <div class="input-group-addon">Culprit Residence</div>
                              <input type="text" id="email3" name="residence" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-home"></i></div>
                        </div>
                    </div>
                
                    <div class="form-group">
                            <div class="input-group">
                                  <div class="input-group-addon">Culprit Date of Birth</div>
                                  <input type="date" id="email3" name="dob" class="form-control">
                                  <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                            </div>
                    </div>
            
             

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Offences Charged</div>
                        <input type="text" id="username3" name="offence" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                    </div>
            </div>

            <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon">Arresting Officer Badge</div>
                        <input type="text" id="username3" name="officerbadge" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
            </div>

            

            <div class="form-group">
                    <div class="input-group">
                            <div class="input-group-addon">Date Crime Occurred</div>
                            <input type="date" id="date" name="dateofcrime" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                    </div>
            </div>
                                                                                 
            <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">Arresting Officer Name</div>
                      <input type="text" id="username3" name="officername" class="form-control">
                      <div class="input-group-addon"><i class=" fa fa-user"></i></div>
                    </div>
                </div>
    


              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">CRIME DESCRIPTION</div>
                  <input type="text" id="text" name="crimedescription" class="form-control">
                  <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Culprit MugshotF</div>
                  
                  <input type="file" name="f"  class="form-control" id="file" placeholder="">
                  <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
        
                <input type="hidden" value="{{csrf_token()}}"  name=""       >
                
              </div>
              
            </div>
            <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">Culprit MugshotR</div>
                    
                    <input type="file" name="r"  class="form-control" id="file" placeholder="">
                    <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
          
                  <input type="hidden" value="{{csrf_token()}}"  name=""       >
                  
                </div>
                
              </div>

              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Culprit MugshotL</div>
                        
                        <input type="file" name="l"  class="form-control" id="file" placeholder="">
                        <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
              
                      <input type="hidden" value="{{csrf_token()}}"  name=""       >
                      
                    </div>
                    
              </div>

              

               

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">FingerPrint Taker</div>
                          <input type="text" id="text" name="fingerprinttaker" class="form-control">
                          <div class="input-group-addon"><i class=" fa fa-camera-retro"></i></div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">Date FingerPrint Taken</div>
                          <input type="date" id="text" name="datefingerprinttaken" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">Arrest Method</div>
                          <input type="text" id="text" name="arrestmethod" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">Release Date</div>
                          <input type="date" id="text" name="custody" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">Culprit Physical Condition</div>
                          <input type="text" id="text" name="condition" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">AdmittedBy</div>
                          <input type="text" id="text" name="admittedby" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">CELL PLACED IN</div>
                          <input type="text" id="text" name="cell" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-building"></i></div>
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