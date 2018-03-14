<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            //
            $table->increments('id');
            $table ->string('first_name'); 
            $table ->string('last_name');
            $table->string('gender')->nullable(); 
            //$table->unique([DB::raw('email(191)')]);
            $table->string('email');
            $table->string('password');
            $table->string('dob')->nullable(); 
            $table->string('phoneNumber')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();   
            $table->string('org_name')->nullable(); 
            $table->string('org_address')->nullable();
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // Schema::drop('users');
    }
}
