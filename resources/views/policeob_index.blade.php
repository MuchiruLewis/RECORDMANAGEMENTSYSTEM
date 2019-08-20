
@section('content')

<div class="content mt-3">


    <div class="col-lg-12">
        <div class="card">
        
        
          <div class="card-header">Nairobi Central Police Station OB Entry </div>
          <div class="card-body card-block">
            <form action="<?php echo route('policeob.store') ?>" method="post">
            <?php echo csrf_field()  ?>

             




            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">OB Number</div>

            <input type="text" size="130px" name="title" readonly="readonly" value="<?php 
            function gen_random_string($length=10)
               {
                   $chars ="1234567890";
                   $final_rand ='OB/APRIL/2019/';
                  for($i=0;$i<$length; $i++)
                      {
                          $final_rand .= $chars[ rand(0,strlen($chars)-1)];
                       }
        return $final_rand;
    }
    echo gen_random_string()."\n"; //generates a string 
    ?>" />
    <div class="input-group-addon"><i class="fa fa-book"></i></div>
  </div>
</div>
















           

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Date & Time of Reporting</div>
                        <input type="date" id="username3" name="reportingdate" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Person Reporting</div>
                        <input type="text" id="username3" name="reportingname" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Identification Number</div>
                <input type="text" id="username3" name="identification" class="form-control">
                <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
              </div>
          </div>


            <div class="form-group">
                    <div class="input-group">
                            <div class="input-group-addon">Address of Reporter</div>
                            <input type="text" id="username3" name="physicalname" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                    </div>
            </div>


            <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">Email</div>
                      <input type="email" id="email3" name="email" class="form-control">
                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                      <div class="input-group-addon">PHONE NUMBER</div>
                      <input type="text" id="email3" name="phonenumber" maxlength="10" class="form-control">
                      <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                </div>
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

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Station Reported At</div>
                        <input type="text" id="username3" name="policestation" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-building-o"></i></div>
                    </div>
            </div>

            <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon">Recorded by</div>
                        <input type="text" id="username3" name="recordedby" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
            </div>

            

            <div class="form-group">
                    <div class="input-group">
                            <div class="input-group-addon">Date Crime Occurred</div>
                            <input type="date" id="date" name="occurrence" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                    </div>
            </div>
                                                                                 
            <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">Location of Crime Occurence</div>
                      <input type="text" id="username3" name="locationofoccurence" class="form-control">
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