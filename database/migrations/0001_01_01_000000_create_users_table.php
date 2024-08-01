<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 /* 
    Q. EXPLAIN WHAT IS MIGRATION IN PHP ?
    We do most of database related tasks like creating tables, defining schema etc.
    here in laravel only. In migrations folder of database folder we get 3 default 
    schemas or files user_table, password_reset and failed_jobs. 
    
    To make new migration file - php artisan make:migration create_tableName
    To migrate - php artisan migrate (may we need to configure db)
    To undo migration - php artisan migrate:rollback
    To delete created tables - php artsian migrate:reset
    To refresh or latest changes migration  to existing - php artisan migrate:fresh 
   
    In user table we already have some columns, using that we can modify

    
 */


return new class extends Migration
{
   
    public function up(): void
    {
        // basic columns defined here we can pick from here to others 
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            /*
            unique() and nullable() are modifiers for modifying columns
            see documentaion of laravel 

            timestamps() creats two columns updated_at and created_at  
            */


        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};



/*     
In laravel we perform database operations in two methods: 
Eloquent ORM (Object Relation Method) - Here we make Models that represents the database, to
be more specific each model represents a table. For users table which by default we will 
get model is created by laravel. 
To create model - php artisan make:model modelName 

  &
Query Builder 

*/