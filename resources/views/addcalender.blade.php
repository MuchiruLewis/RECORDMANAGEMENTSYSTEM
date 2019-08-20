@extends('layouts.admin')
@section('content')

<div class="content mt-3">


    <div class="col-lg-12">
        <div class="card">
        
        
          <div class="card-header">Nairobi Central Police Station EVENTS CALENDER </div>
          <div class="card-body card-block">
            <form action="<?php echo route('addcalender.store') ?>" method="post">
            <?php echo csrf_field()  ?>

             




          
















           

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">EVENT</div>
                        <input type="text" id="username3" name="title" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">START DATE</div>
                        <input type="date" id="username3" name="start_date" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                    </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">END DATE</div>
                <input type="date" id="username3" name="end_date" class="form-control">
                <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
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