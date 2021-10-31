<?php

namespace Gad\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Gad\Contact\Models;
use Gad\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Gad\Contact\Mail\ContactMailable;
class ContactController extends Controller{

  public function index(){
    //1st contact is the package name , 2nd contact is the blade file 
    return view('contact::contact');
  }

  public function send(Request $request){

       Mail::to(config('contact.send_to_email'))->send(new ContactMailable($request->message,$request->name));
       Contact::create($request->all());
       return redirect(route('contact'));
  }
}