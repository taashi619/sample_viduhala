<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('grade_id');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('Admin')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('Class')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('Grade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Student');
    }
}
