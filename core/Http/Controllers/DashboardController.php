<?php
namespace App\Http\Controllers;
use Auth;
use Entrust;
use Session;
use DB;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests;


class DashboardController extends GeneralController
{
    public function index(Request $request)
    {
        $data['pagetitle'] = 'Dashbaord';
        return view('Dashboard.index', $data);
    }
}