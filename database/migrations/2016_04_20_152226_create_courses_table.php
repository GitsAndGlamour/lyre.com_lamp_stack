<?php

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
            $table->increments('course_id');
            $table->json('meta');
            $table->string('tags');
            $table->string('title');
            $table->string('domain');
            $table->json('duration');
            $table->string('authors');
            $table->date('ending_on');
            $table->string('language');
            $table->date('published_on');
            $table->decimal('cost', 5, 2);
            $table->string('sub_category');
            $table->string('location');
            $table->string('url')->unique();
            $table->timestamps('entered_on');
            $table->mediumText('desctiption');
            $table->string('corporate_author');
            $table->enum('difficulty', [1,2,3]);
            $table->enum('type',['professional certification','high school','university']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
    }
}
