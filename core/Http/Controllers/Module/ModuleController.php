<?php

namespace App\Http\Controllers\Module;

use Illuminate\Http\Request;
use App\Module\Module;
use DB;
use App\Http\Controllers\GeneralController;

class ModuleController extends GeneralController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $success = "";
        $error = "";
        $module = DB::Table('modules')->orderBy('id', 'desc')->get();

        foreach($module as $key => $value)
        {
            $line = (array) $value;
            $line['submodules'] = DB::Table('sub_modules')->Where('module_id', $value->id)->get();
            $line['created'] = date('h:i a - jS M, Y', strtotime($value->created_at));
            $line['order']    = ($value->module_order == null) ? 0 : $value->module_order;
            $line = (object) $line;
            $module[$key] = $line;
        }

        $pagetitle = "Create Module";
        return view('Dashboard.Modules.create',compact('module', 'pagetitle', 'success', 'error'));
    }
	
	public function store(Request $request)
    {
		$rules = [ 'module_name'=>'required',];
		$customMessages = [
        'required' => 'The :attribute can not be blank.'
    	];
		
		$this->validate($request,$rules,$customMessages);
		
		$module = new Module();
        $module->description=$request->get('module_name');		
		$module->save();        
        return redirect('module')->with('success', 'Information has been added successfully');
    }
	
	public function edit($id)
    {
        $module = Module::find($id);
        return view('module.edit',compact('module','id'));
    }
	
	public function show($id)
    {
        //
    }

 	public function update(Request $request, $id)
    {
        $rules = [ 'module_name'=>'required',];
		$customMessages = [
        'required' => 'The :attribute can not be blank.'
    	];
		
		$this->validate($request,$rules,$customMessages);
		
		$module= Module::find($id);
        $module->description=$request->get('module_name');
        $module->save();
		return redirect('module')->with('success','Information has been updated successfully');
    }

    public function destroy($id)
    {
        $module = Module::find($id);
        $module->delete();
        return redirect()->back()->with('success','Information has been deleted succssfully');
    }

    public function createModule(Request $request)
    {
        $mname = $request['modulename'];
        $order = $request['order'];
        $check = DB::table('modules')->where('description', $mname)->count();

        if($check > 0){
            return json_encode(['type' => 2, 'message' => 'Module already exists!']);
        }

        if(DB::table('modules')->insert([
            'description'          => $mname,
            'module_order'         => $order
        ])){

            return json_encode(['type' => 1, 'message' => 'Module created succesfully!']);
        }
        return json_encode(['type' => 2, 'message' => 'Oops! something went wrong, please try again later']);
    }

    public function editmod(Request $request)
    {
        if($request['description']){
            $this->validate($request, [
                'description'   => 'required'
            ],[],
                [
                    'description' => 'Description'
            ]);

            DB::Table('modules')->where('id', $request['mod-id'])->update([
                'description'  => $request['description']
            ]);

            return redirect()->back()->with('success', 'Module has been updated');
        }
    }
}
