<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('event', function (Blueprint $table) {
            //
$table->increments('id');                 
            $table->integer('creator_id')->unsigned();
            $table->foreign('creator_id')->references('id')->on('users');
             $table->string('title'); 
             $table->string('description'); 
             $table->string('sponsor_name')->nullable(); 
             $table->string('sponsor_logo')->nullable();
             $table->string('sponsor_url')->nullable(); 
             $table->string('event_flyer')->nullable();
             $table->string('org_name')->nullable(); 
             $table->string('org_logo')->nullable(); 
             $table->string('Address')->nullable();
             $table->string('state')->nullable(); 
             $table->string('city')->nullable();     
             $table->string('free')->nullable(); 
             $table->date('event_starts')->nullable();
             $table->date('event_ends')->nullable();
             $table->string('ticket_price')->nullable();
             $table->string('ticket_qty')->nullable();
             $table->string('sales_start')->nullable();
             $table->string('sales_end')->nullable();
             $table->string('twitter')->nullable();
             $table->string('facebook')->nullable();
             $table->string('instagram')->nullable();
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
    }
}
