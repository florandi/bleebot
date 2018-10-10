<?php

namespace App\Http\Controllers\Module; // my controller

use Illuminate\Http\Request;
use App\Module\SubModule; //my model
use App\Module\Module; //my model
use App\Http\Controllers\GeneralController; //my controller
use DB;
use Validator;

class SubModuleController extends GeneralController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $success = "";
        $error = "";
		$submodule = DB::Table('sub_modules')->orderBy('id', 'desc')->get();
        
        foreach($submodule as $key => $value)
        {
            $line = (array) $value;
            $line['modulename'] = DB::Table('modules')->where('id', $value->module_id)->first()->description;
            $line['created'] = date('h:i a - jS M, Y', strtotime($value->created_at));
            $line['order']    = ($value->submoduleorder == null) ? 0 : $value->submoduleorder;
            $line = (object) $line;
            $submodule[$key] = $line;
        }
        // dd($submodule);
        $module = DB::Table('modules')->orderBy('id', 'desc')->get();
        $pagetitle = "Create Submodule";
		return view('Dashboard.Modules.create_submodule',compact('submodule', 'module', 'pagetitle', 'success', 'error'));
	}

	public function store(Request $request)
    {
		$rules = [ 'submodulename'=>'required','modulename'=>'required','route'=>'required',];
		$customMessages = [
        'required' => 'The :attribute can not be blank.'
    	];
		
		$this->validate($request,$rules,$customMessages);
		
		$submodule = new SubModule();
        $submodule->description=$request->get('submodulename');
		$submodule->module_id=$request->get('modulename');
		$submodule->routename=$request->get('route');		
		$submodule->save();        
        return redirect()->back()->with('success', 'Information has been added successfully');
    }
	
	public function edit($id)
    {
        $submodule = SubModule::find($id);
		$module = Module::all();
        return view('module.submodule.edit',compact('submodule','id', 'module'));
    }
	
	public function show($id)
    {
        //
    }

 	public function update(Request $request, $id)
    {
        $rules = [ 'submodule_name'=>'required','module_id'=>'required','routename'=>'required',];
		$customMessages = [
        'required' => 'The :attribute can not be blank.'
    	];
		
		$this->validate($request,$rules,$customMessages);
		
		$submodule= SubModule::find($id);
        $submodule->description=$request->get('submodule_name');
		$submodule->module_id=$request->get('module_id');
		$submodule->routename=$request->get('routename');
        $submodule->save();
		return redirect('submodule')->with('success','Information has been updated successfully');
    }

    public function destroy($id)
    {
        $submodule = SubModule::find($id);
        $submodule->delete();
        return redirect()->back()->with('success','Information has been deleted succssfully');
    }

    public function editsub(Request $request)
    {
        if($request['description']){
            $this->validate($request, [
                'description'   => 'required',
                'module'        => 'required',
                'route'         => 'required'
            ],[],
                [
                    'description' => 'Description',
                    'module'        => 'Module',
                    'route'         => 'Route' 
            ]);

            DB::Table('sub_modules')->where('id', $request['subm-id'])->update([
                'description'  => $request['description'],
                'module_id'     => $request['module'],
                'routename'     => $request['route']
            ]);

            return redirect()->back()->with('success', 'SubModule has been updated');
        }
    }

}
