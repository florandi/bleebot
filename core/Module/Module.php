<?php
namespace App\Module;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
   protected $table = "modules";
     
   public function submodule()
   {
    	return $this->hasMany('App\Module\SubModule');
   }
   public function module_role()
   {
        return $this->hasMany('App\Role\ModuleRole');
   }
}

?>