<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\Subscribe;

class ContactController extends Controller
{
    public function index() {
        return view('front.contact.contact-us');
    }

    public function storeContactInfo(Request $request) {
        $request->validate([
            'name'  => 'required',
            'email'  =>  'required',
            'company' => ' required',
            'mobile'  => 'required',

           ], ['name'=> 'The Name Field Required', 'email'=> 'The E-Mail Field Required', 'company'=> 'The Company Name Required', 'mobile'=> 'The Mobile is Required'],
           ['name'=> 'Name', 'email'=>'E-Mail', 'company'=> 'Company', 'mobile'=> 'Telephone']);


        $contact =  new Contact;
        $contact->name =  $request->name;
        $contact->email =  $request->email;
        $contact->company = $request->company;
        $contact->mobile = $request->mobile;

        $contact->save();

        return back()->with('contact', ' Your Message has been sent');

    }


    public function subscribe(Request $request) {

        $subscribe =  new Subscribe;
        $subscribe->email =  $request->email;
        $subscribe->save();
        return back()->with('subscribe', ' Your subscribed successfully');
    }
}
