<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function sendContactMail(Request $request){
      $data = $request->all();
      return (new ContactMessage($data))->render();
      Mail::to('rrasheedalt@gmail.com')->send(new ContactMessage($data));

      $this->flashSuccessMessage('Your message is sent, we will respond accordingly.');
      return back();
    }
}
