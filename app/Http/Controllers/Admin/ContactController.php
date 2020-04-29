<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\Subscribe;

class ContactController extends Controller
{
    public function showAllContacts() {
        $contacts = Contact::all();
        return view('admin.contact.contact-us', compact('contacts'));
    }

    public function showAllSubscribe() {
        $subscribes = Subscribe::all();
        return view('admin.contact.subscribe', compact('subscribes'));
    }

    public function deleteContact($contact) {
        $contact = Contact::find($contact);
        $contact->delete();

        return back()->with('delete', '1 Record has been deleted');
    }

    public function deleteSubscribe($subscribe) {
        $subscribe = Subscribe::find($subscribe);
        $subscribe->delete();

        return back()->with('delete', '1 Record has been deleted');
    }
}
