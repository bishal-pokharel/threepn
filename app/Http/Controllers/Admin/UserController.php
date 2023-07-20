<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Resources\DataGrid;
use Illuminate\Http\Request;
use App\Notifications\UserCreated;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(Request $request)
    {       
        if($request->ajax()){ 
            $columns_list = [
                0=>'name',
                1=> 'email'
            ];
            $query=User::withTrashed()->select(['id','name','email','last_login','deleted_at',DB::raw("CASE WHEN deleted_at IS NULL THEN False ELSE True END AS deleted_ac")])->orderBy('deleted_ac','asc')->with('update_by');
            
            $datas=new DataGrid($request,User::class,$query,$columns_list); 
            return $datas->call();
        }
        return view('admin.user.index');
    }
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users,email',
            ]);
    
            $input['name'] = $request->name;
            $input['email'] = $request->email;
            $input['updated_by'] = auth()->user()->id;
            $pwd=substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8/strlen($x)) )),1,8);
            $input['password'] = Hash::make($pwd);
    
            $user = User::create($input);
            $user->notify(new UserCreated($request->email,$pwd));
            Alert::success('User created successfully');
            return redirect()->route('admin.users.index');
        }
        return view('admin.user.create');
    }
    public function destroy($id)
    {
        if($id==Auth::id()){
            Alert::toast('Error', 'error');
            return redirect(route('admin.users.index'));
        }
        $user = User::find($id);
        if($user){
            if($user->delete()){
                Alert::success('User deleted successfully');
                return redirect()->route('admin.users.index');
            }
        }
        Alert::toast('Error', 'error');
        return redirect(route('admin.users.index'));
    }

    public function activate($id)
    {
        
        $user = User::withTrashed()->find($id);
        if($user){
            $user->deleted_at = null;
            $user->activated_at = Carbon::now();
            if($user->save()) {
                Alert::success('User Activated successfully');
                return redirect()->route('admin.users.index');
            }
        }
        Alert::toast('Error', 'error');
        return redirect(route('admin.users.index'));
    }
    public function password(Request $request)
    { 
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'password' => 'required',
                'new_password' => 'required|min:7',
                'confirm_password' => 'same:new_password'
            ]);
            if (Hash::check($request->password,auth()->user()->password)) {
                User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password),'password_updated'=>1,'password_update_date'=>Carbon::now()]);
                Alert::toast('Successfully updated ', 'success');
                return redirect(route('home'));
            }
            Alert::toast('Password Not Match', 'error');
            return redirect()->back();
        }
        return view('admin.user.password');
    }
}
