<?php
/*
A new controller can be created using 'php artisan make:controller AppController' command

*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Table;  // to make models accessible 

/*
Q. HOW DATA IS PASSED FROM CONTROLLER TO VIEW ? ** (we shall also see how data is brought
                                                      from MODEL )
There are various ways,
First one is using compact() function as an another argument with view and passing
keys of variable name in compact(). To use these in views we can use blade syntax 
{{ $varName }}

Second, We could use an associative array instead of compact()
Third, We could also use 'with' method 
*/

class AppController extends Controller
{
    public function index() {
       
      //  $name = 'John Doe';
      //  $country = 'UK';
      
      //  return "Happy Coding with Laravel"; // generally we would pass view 
      
      // return view("welcome", compact('name', 'country'));
      /*
      return view("welcome", array(
         'name' => $name,
         'country' => $country
      )); */
      
      /*
      return view("welcome",)
            ->with('name', $name)
            ->with('country', $country)
      ; */
    

      // Database Operations (Doing directly here, but normally would be done with forms)
      // Table in the end is a class so we will make objects out of it 
   
      $Table_object = new Table;
      $Table_object->full_name = "Sudhanshu";
      $Table_object->save();


      return "Database Operations";

    }

    public function about() {
       return view("about");
     }
}
