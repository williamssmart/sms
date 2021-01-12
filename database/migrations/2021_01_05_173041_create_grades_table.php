<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->string('teacher1');
            $table->string('teacher2')->nullable();
            $table->string('fees');
            $table->timestamps();
        });
        DB::table('grades')->insert([
          ['grade' => 'Grade 1', 'teacher1' => '081445837' , 'fees' => '1500'],
          ['grade' => 'Grade 2', 'teacher1' => '081445837' , 'fees' => '1500' ],
          ['grade' => 'Grade 3', 'teacher1' => '081445837' , 'fees' => '1500' ],
          ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
