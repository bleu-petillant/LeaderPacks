<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactpage = ContactPage::first();
        return redirect()->route('contactpage.edit',
        [
            'contactpage'=>$contactpage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $contactpage)
    {
        $contactpage = ContactPage::where('id',$contactpage->id)->first(); 

        return view('admin.contactpage.edit',compact(['contactpage']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPage $contactpage)
    {

        $this->validate($request,
        [
            'contact_text'=>'required',
        ]);
           
            if($contactpage->isClean('contact_text'))
            {
                
                $contactpage->contact_text  = $contactpage->contact_text;
            }
            $contactpage->contact_text  = $request->contact_text;
            $contactpage->save();

        $request->session()->flash('success', 'Congratulations ! The contact page has been modified successfully.');
        return redirect()->route('contact');
    }


}
