<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftaremployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('employee', function(Blueprint $table){
            $table->increments('id'); //default
            $table->string('Name'); // created untuk tambah tabel
            $table->string('Adress');
            $table->string('Email');
            $table->boolean('Action');
            $table->timestamps(); //default 
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('employee');
    }
}
