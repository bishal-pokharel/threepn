<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enquiry;
use App\Resources\DataGrid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function enquires(Request $request)
    {
        if($request->ajax()){ 
            $columns_list = [0=>'name',1=>'email',5=>'created_at'];
            $query=Enquiry::select('*');
            
            $datas=new DataGrid($request,Enquiry::class,$query,$columns_list); 
            return $datas->call();
        }
        return view('admin.enquires');
    }
    public function enquiry_view(Request $request,Enquiry $enquiry)
    {
        return view('admin.enquire_view',compact('enquiry'));
    }
}
