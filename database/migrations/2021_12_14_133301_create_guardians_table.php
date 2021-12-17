<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();

            $table->string('email')->unique();
            $table->string('address');

            //Fatherinformation
            $table->string('father_name');
            $table->string('father_phone');
            $table->foreignId('father_blood_id')->constrained('bloods','id');
            

            //Mother information
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->foreignId('mother_blood_id')->constrained('bloods','id');

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
        Schema::dropIfExists('guardians');
    }
}
