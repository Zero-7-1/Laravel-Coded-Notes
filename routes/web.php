<?php    /* Laravel is a MVC based framework of PHP 
     CONCPETS COVERED: 
     ---> ROUTING with HTTP Request 
     ---> MVC Basics 


*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController; // this is needed to use controllers 

/* Q. EXPLAIN WHAT IS ROUTING ? *** 
Routing is the process of defining how our application should respond to different 
HTTP requests. (Q. EXPLAIN WHAT ARE HTTP REQUESTS ? **)
Routes are defined in the routes/web.php file for web routes and 
routes/api.php for API routes. And we also have console.php

Q. WHAT DOES ROUTES DO AND HOW TO DEFINE IT AND IN HOW MANY WAYS ? ***
Routes maps URL pattern to a specific function or controller method.
Or 
simply returns a view in a function or Instead of defining the logic in the route 
itself, we could route to a controller.
*/ 


/* A simple route 

Route::get('/', function () {
    return view('welcome');
}); 

Simply returning welcome view from views folder or any normal message 
This is good enough if we want to render single page but for website with 
more functionalities we need to make controllers 
*/

// Basic Route without any parameters 
// Route::get('/','AppController@index'); // this syntax did not worked 
Route::get('/', [AppController::class, 'index']);   // this syntax worked 

/* we used get route because we use publicly the url info, other one is 
post route which is used to interact with database 
We define controller in app folder inside http controllers   */

// Route with Parameter 
Route::get('/about/{paramname}', [AppController::class, 'about']);
/*
In the url we can pass any parameter name to the route but parameter is required if
not it will show 404 error 
*/

// Route with Optional Parameter, just need to add ? with paraname 
Route::get('/services/{paramName?}', function() {
    return "<h1> Hello from Services</h1>";
});

// Named Routes 
Route::get('/contact','AppController@function-name')->name('contact');

/*
Unique name for each route or assigning name to routes 
also known as reverse routing Q. WHAT IS REVERSE ROUTING ? 

The main advantage of reverse routing is we do not have to change the url 
everytime in other files if route defination changes a bit. (see my project)
*/




/* 
Q. EXPALIN WHAT IS MVC ? ***
MVC - MODEL VIEW CONTROLLER - A design pattern or architecture where the codebase
divided into 

MODEL - database related, interacts with the database and retrieves, inserts, 
        updates, or deletes data (php artisan make:model modelName), Model
        can be found in the app directory where Controller lies within Http folder

VIEW - contents to be displayed on webpage or presentation layer, typically contains 
       html with blade syntax, stored in the resources/views directory

CONTROLLER - business logic, mediater between MODEL and VIEW, handles user requests, 
             retrieves data from the Model, and passes it to the View
             (php artisan make:controller nameofController)

Q. IS CONTROLLER AND API SAME OR ACTS SIMILAR ? **
MVC's controller acts like an API but it isn't API. The major differnce is routing.
Controller HTTP requests routed by framework, Controller returns an html view not
just json or xml like API. Controller seems similar to API because  VIEW files 
requests data from MODEL to CONTROLLER and CONTROLLER provides requested data from
MODEL to VIEW. Something like API but we also do have API in laravel which we would
look later. 
*/






?>