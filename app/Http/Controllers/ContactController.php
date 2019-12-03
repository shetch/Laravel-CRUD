<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();
        $contact = new Contact();
        $contact->firstname = $validated['firstname'];
        $contact->lastname = $validated['lastname'];
        $contact->dob = $validated['dob'];
        $contact->gender = $validated['gender'];
        $contact->telephone = $validated['telephone'];
        $contact->address1 = $validated['address1'];
        $contact->address2 = $validated['address2'];
        $contact->city = $validated['city'];
        $contact->county = $validated['county'];
        $contact->postcode = $validated['postcode'];
        $contact->save();

        return redirect()->route('contacts.index')->with('success','Contact created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        $validated = $request->validated();
        $contact = Contact::find($id);
        $contact->firstname = $validated['firstname'];
        $contact->lastname = $validated['lastname'];
        $contact->dob = $validated['dob'];
        $contact->gender = $validated['gender'];
        $contact->telephone = $validated['telephone'];
        $contact->address1 = $validated['address1'];
        $contact->address2 = $validated['address2'];
        $contact->city = $validated['city'];
        $contact->county = $validated['county'];
        $contact->postcode = $validated['postcode'];
        $contact->save();

        return redirect()->route('contacts.index')->with('success','Contact updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contacts.index')
            ->with('success','Contact deleted successfully');
    }
}
