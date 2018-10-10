<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['guest']], function() {

    Route::any('/login',            'MainController@login');
    Route::any('/forgot-password',  'MainController@forgotpassword');
    Route::any('/register',         'MainController@register');
    Route::any('/verify/email',     'MainController@verify');
    
    Route::any('/login-request', 'MainController@ajax_login');

});

Route::group(['middleware' => ['auth']], function () 
{
    Route::any("user/dashboard", "DashboardController@index");

    //module system
    Route::any('/create/module', 'Module\ModuleController@index');
    Route::any('/creating/module/ajax', 'Module\ModuleController@createModule');

});

Route::get('/logout', function(){
    $id = session()->get('new_log_id');
    
    $chek = DB::table('logger')->where('id', $id)->where('user_id', Auth::user()->id)->first();
    if($chek != null){
        DB::table('logger')->where('id', $id)->where('user_id', Auth::user()->id)
        ->update([
            'loggedout_time'    => date('h:i:s a - d M, Y', time())
        ]);
    }
    Auth::logout();
    Session::flush();
    return redirect('/login')->with('success', 'You have been logged out!');
});
