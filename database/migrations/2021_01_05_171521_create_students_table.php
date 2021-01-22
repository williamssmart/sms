<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('parentID');
            $table->string('grade');
            $table->boolean('status')->default(1);
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('gender');
            $table->string('mmob');
            $table->string('ddob');
            $table->string('yyob');
            $table->string('bloodgroup')->nullable();
            $table->string('nationality');
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('homelanguage')->nullable();
            $table->string('icename1')->nullable();
            $table->string('relationship1')->nullable();
            $table->string('phone1')->nullable();
            $table->string('icename2')->nullable();
            $table->string('relationship2')->nullable();
            $table->string('phone2')->nullable();
            $table->string('regNumber');
            $table->string('realRegNumber');
            $table->string('passport');
            $table->boolean('feespaid')->default(0);
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
        Schema::dropIfExists('students');
    }
}
