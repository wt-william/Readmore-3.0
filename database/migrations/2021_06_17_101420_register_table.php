<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) { 
            $table->id();
            $table->timestamps();
            $table->longText('name')->collation('utf8_general_ci');
            $table->longText('password')->nullable()->collation('utf8_general_ci');
            $table->longText('email')->nullable()->collation('utf8_general_ci');
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
        Schema::dropIfExists('register');

    }
}
