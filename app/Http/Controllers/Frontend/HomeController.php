<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SendEnquiryEmail;
use App\Models\Lead;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.home');
    }
    public function about(Request $request)
    {
        return view('frontend.about');
    }
    public function services(Request $request)
    {
        return view('frontend.services');
    }
    public function contact(Request $request)
    {
        return view('frontend.contact');
    }
    public function enquiry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required',
            'subject' => 'required|max:30',
            'message' => 'required|max:200'
        ]);
        
        $data=[];
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        if(!Lead::where('email',$request['email'])->first()){
            Lead::create($data);
        } 
        $data['phone'] = $request['phone'];
        $data['subject'] = $request['subject'];
        $data['message'] = $request['message'];
        $enquiry=Enquiry::create($data); 
        dispatch(new SendEnquiryEmail($enquiry,'Enquiry',config('app.enquiry_email'),[]));
        Alert::toast('Enquiry Submitted Successfully','success');
        return redirect()->route('contact');
    }
    
}
