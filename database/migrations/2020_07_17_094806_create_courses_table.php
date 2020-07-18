<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('course');
            $table->string('reg');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dept');
            $table->string('lecturer');
            $table->string('unit');
            $table->string('session');
            $table->string('semester');
            $table->string('status');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('phone_number');
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
        Schema::dropIfExists('courses');
    }
}
