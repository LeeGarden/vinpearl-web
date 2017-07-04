<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('image');
            $table->string('video');
            $table->text('description');
            // $table->date('date_begin')->nullable();
            // $table->string('time_begin')->nullable();
            $table->text('overview');
            $table->text('location');
            $table->text('overall_ground');
            $table->text('sample_villa');
            $table->text('investment');
            $table->text('payment');
            $table->text('construction');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->integer('mainproject_id')->unsigned()->nullable();
            $table->foreign('mainproject_id')->references('id')->on('main_projects')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
