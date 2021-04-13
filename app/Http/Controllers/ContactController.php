<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function sendContactMail(Request $request){
      $data = $request->all();
      // return (new ContactMessage($data))->render();
      Mail::to(config('app.mail_to'))
      ->cc(['rrasheedalt@gmail.com', 'mudathirdhikrullah@gmail.com'])
      // ->cc(config('app.mail_cc'))
      ->send(new ContactMessage($data));

      $this->flashSuccessMessage('Thank you for contacting us, we will respond accordingly.');
      return back();
    }
}
