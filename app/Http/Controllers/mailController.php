<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\SendMail;

class mailController extends Controller
{
    public function send()
    {
      Mail::send(new sendMail());
      return redirect('/email');

     
    }
    public function email()
    {
        return view('email');
    }
}
