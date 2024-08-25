<?php
/*
A new controller can be created using 'php artisan make:controller AppController' 
command

*/   

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Table;  // to make models accessible for Eloquent ORM 
use Illuminate\Support\Facades\DB; //For Query Builder 

/*
Q. HOW DATA IS PASSED FROM CONTROLLER TO VIEW ? *** (we shall also see how data is 
                                                    brought
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
       
       $name = 'John Doe';
       $country = 'UK';
      
      // return "Happy Coding with Laravel"; // we can pass simple strings 
      
      //return view("welcome", compact('name', 'country'));
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
   

      // Insert Operations - method 1  
      $Table_object = new Table;
      $Table_object->full_name = "Sudhanshu";
      $Table_object->age = "25";
      // $Table_object->save();


    // Insert Operations - method 2 using arrays   
    $param = array(
    'full_name' => "Rajeeb",
    'age' => "23"
    );
    // Table::create($param);
    /* Note this would create null for age,
       to avoid this we we have to pass age to fillable in model  */



  // Select all records or reading from db 
  // $Tables = Table::all();
  // dd($Tables);

  // Select one record by id using find() 
 // $id = 3;
 // $Tables = Table::find($id);
 // dd($Tables);

 // Selecting one record by another column or field 
 //$Tables = Table::where("age","25")->get();
 //dd($Tables);

 // updating records 
  //$id = 4;
  //$Tables = Table::find($id);
  //$Tables->full_name = "Jon Snow";
  //$Tables->save();
  // dd($Tables);

  // Deleting Records 
   //$id = 5;
   //$Tables = Table::find($id);
   // $Tables->delete();
  

  // Qurey Builder Methods 

  //Insert 
  $param = array (
    'full_name' => "Robert"
  );
  // DB::table('table_name')->insert($param);
  // this does not care about mandtory fillable columns
  
  // select 
  // $Table = DB::table('table_name')
    //     ->get();
  // echo "<pre>";
  // print_r($Table);


  // select one specific record or same using same where again 
  //$Table = DB::table("table_name")->where('age', '25')->get();
 // echo "<pre>";
 // print_r($Table);


 // updating
 $param = array(
        'full_name' => "Eddard"
 );
 // DB::table('table_name')->where('id', '6')->update($param);

 // similarly delete using delete(), use where clause otherwise whole db will be gone




     // return "Database Operations";

    }


    

    public function about() {
       return view("about");
     }
}
