<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

use Auth;
use App\Module\Module;
use App\Module\SubModule;
use DB;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        //$this->users = $users;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
		if(Auth::check()){
        
        
        $modulez = DB::table('modules')->get();

        
        $accountstatus = 100;
        if(Auth::user()->role_id == 4 || Auth::user()->role_id == 5){
            $chk = DB::Table('user_profile')->where('user_id', Auth::user()->id)->first();
            $accountstatus = $this->calculateAccountCompletion($chk);
        }

        $emailverification = true;
        if(Auth::user()->role_id == 4 || Auth::user()->role_id == 5){
            $chk = DB::Table('users')->where('id', Auth::user()->id)->first();
            if($chk->email_verification == 0){
                $emailverification = false; 
            }
        }
        $appmenumodule = Module::orderBy('module_order', 'asc')->get();
		$appmenusubmodule = SubModule::join('module_roles', 'module_roles.submodule_id','=','sub_modules.id')
		->where('module_roles.userrole_id', '=',Auth::user()->role_id )
		->orderBy('submoduleorder', 'asc')->get();
		$view->with(compact('notifications', 'messagenotification', 'appmenumodule', 'appmenusubmodule', 'modulez', 'emailverification', 'accountstatus', 'categories', 'task'));
		} else {
            $categories = DB::table("category")->get();

            $task = DB::table('task')->where('contracted', 0)->orderBy('id', 'desc')->limit(10)->get();

            foreach($categories as $key => $value){
                $line = (array) $value;
                $line['num_of_project'] = DB::table('task')->where('category', $value->id)->count();
                $line = (object) $line;
                $categories[$key] = $line;
            }
    

            $view->with(compact('categories', 'task'));
        }
    }

    private function calculateAccountCompletion($chk)
    {
        $score = 100;
        $sixfields = ceil(100/6);

        if($chk == null){
            $score = $score - 90;
            return $score;
        }

        if($chk->hourlyrate == null){
            $score = $score - $sixfields;
        }

        if($chk->tagline == null){
            $score = $score - $sixfields;
        }

        if($chk->skillset == null){
            $score = $score - $sixfields;
        }

        if($chk->nationality_id == null){
            $score = $score - $sixfields;
        }

        if($chk->introduction == null){
            $score = $score - $sixfields;
        }

        if($chk->twitter == null && $chk->dribbble == null && $chk->github == null && $chk->behance == null){
            $score = $score - $sixfields;
        }

        return $score;
    }
}