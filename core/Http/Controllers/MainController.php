<?php
namespace App\Http\Controllers;
use Auth;
use Entrust;
use Session;
use DB;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests;


class MainController extends Controller
{
    public function login()
    {
        $data['pagetitle'] = "Login";
        $data['success'] = "";
        $data['error'] = "";

        return view('auth.login', $data);
    }

    public function ajax_login(Request $request)
    {
        if($request['email']){
            if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']], $request['remember']))
            {
                $logid = DB::table('logger')->insertGetId([
			        'user_id'       => Auth::user()->id,
			        'time_entered'  => date('h:i:s a - d M, Y', time()),
			        'server'        => json_encode($_SERVER)
			     ]);
			     session()->put('new_log_id', $logid);
                return json_encode(array('type' => 1, 'message' => 'Login was successful!'));
            } else {
                return json_encode(array('type' => 2, 'message' => 'Invalid email or password!'));
            }
        }
        return json_encode(array('type' => 2, 'message' => 'Invalid details'));
    }
}