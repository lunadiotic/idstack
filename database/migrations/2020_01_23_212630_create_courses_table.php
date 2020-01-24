<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigInteger('skill_id');
            $table->string('slug');
            $table->string('title');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('runtime')->default();
            $table->double('price', 8, 2)->default(0);
            $table->boolean('is_pro')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
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
