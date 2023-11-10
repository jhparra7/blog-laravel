<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    
    //Se utilizara para el caso que se necesita establecer que tabla va ser adminsitrada por el modelo
    //protected $table='users';

    //protected $fillable = ['name','description','categoria'];
    // o en el supuesto que tenga un atributos status si estamos en el escenreario de muchos atributos
    protected $guarded = []; // protected $guarded = ['status']; 

   public function getRouteKeyName(){
        return 'name';
   }

}
