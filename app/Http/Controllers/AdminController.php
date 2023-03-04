<?php 

namespace App\Http\Controllers;
use App\Models\Admin;
use App\HTTP\Requests;
use Illuminate\Http\Request;
// use App\HTTP\Controllers\Redirects;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();

class AdminController extends Controller
{
    public function index(){
        return view('backend.admin_login');
    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    public function admin_dashboard(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
            // return Redirect::to('/admin/dashboard');
        //    return redirect()->route('admin.dashboard');
            return view('backend.dashboard');
        }
        else {
            Session::put('message', 'Email or Password are not incorrect');
            // return Redirect::to('/admins');
            // return redirect()->route('admin.login');
            return "this is login page";

        }
       
    }


}
