<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->increments('activity_id');
            $table->json('meta');
            $table->string('title');
            $table->integer('author');
            $table->string('category');
            $table->mediumText('body');
            $table->boolean('is_hidden');
            $table->boolean('is_flagged');
            $table->timestamps('posted_on');
            $table->enum('rating', [1,2,3,4,5]);
            $table->enum('type', ['post', 'comment', 'forum', 'review']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity');
    }
}
