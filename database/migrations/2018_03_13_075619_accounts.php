<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accounts', function (Blueprint $table) {
            $table->increments('id');
            $table ->string('first_name'); 
            $table ->string('last_name');
            /*$table ->string('email')->unique();*/ 
            $table->unique([DB::raw('email(191)')]);
            $table->string('password');
            $table->string('gender');
            $table->string('dob'); 
            $table->string('phoneNumber');   
            $table->string('payment_secret_key'); 
            $table->string('payment_token');
            $table->string('vendor'); 
            $table->string('organizer'); 
            $table->string('guest'); 
            $table ->date('created_at');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Accounts');
    }
}
