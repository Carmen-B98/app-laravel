<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $req){
      //validate form
      $data=[
        'nume'=>$req->nume,
        'email'=>$req->email,
        'phone'=>$req->phone
      ];
      // dd($data);
      Mail::to('cbuzamurga@gmail.com')->send(new ContactMail($data));
      return 'Formularul a fost trimis cu succes!';
    }
}
