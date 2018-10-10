<?php
namespace App\Role;

use Illuminate\Database\Eloquent\Model;

class ModuleRole extends Model
{
   protected $table = "module_roles";
   protected $fillable = ['userrole_id','submodule_id',];
   
     
  /* public function module()
   {
    	return $this->belongsTo('App\Module\Module');
   }*/
  /* public function submodule()
   {
    	return $this->belongsTo('App\Module\SubModule');
   }*/
}

?>