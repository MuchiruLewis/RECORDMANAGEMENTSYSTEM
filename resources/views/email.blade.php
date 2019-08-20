@extends('layouts.police')
@section('content')
<div class="content mt-3">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <TITLE>Document</TITLE>
</head>
<body>

        <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">SEND DETAILS TO POLICE IN THE FIELD</div>
                  <div class="card-body card-block">
                        <form action="send" method="post">
                                {{csrf_field()}}
                      <div class="form-group">
                
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                          <input type="email" id="email" name="to" placeholder="RECEIVER" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                       <label>Enter Your Message</label>
                       <textarea name="message" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                       <input type="submit" name="send" class="btn btn-info" value="Send" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
         













 




















@endsection