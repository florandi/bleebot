<?php
namespace App\Module;

use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
   protected $table = "sub_modules";
   
   public function module()
   {
        return $this->belongsTo('App\Module\Module');
   }
   /*public function module_role()
   {
        return $this->hasMany('App\Module\ModuleRole');
   }*/
}

?>