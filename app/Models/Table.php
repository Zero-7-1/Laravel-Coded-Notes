<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
   // we need to define some properties here 
   // table name 
   protected $table = "table_name"; 
 /* A Important Note about Prural Model Follwed by Laravel - 
  By default, Laravel assumes that the table name corresponds to the 
  plural form of the model name. For example, if you have a model named User, 
  Laravel will assume the corresponding table name is users 

  However, if our database table does not follow Laravel's default naming convention, 
  we can specify the table name explicitly using the '$table' property in the model.

  If mistakenly used $table1 or any other property name, Laravel would default 
  to looking for a table named tables (the plural form of the model name Table), 
  which does not exist in our database, resulting the error I already  encountered
  
*/



   // primary key 
   protected $primaryKey = "id";

   // Fillable columns - mandotory fillings not set to null
   protected $fillable = array("full_name", "age");
   
   
   
    use HasFactory;
}

/* After successfully defined model, for operations we have to go to controllers as 
controller will request the model to perfrom CRUD or any operations related to db. 
  */