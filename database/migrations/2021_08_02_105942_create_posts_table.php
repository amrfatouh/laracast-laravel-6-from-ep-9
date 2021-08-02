<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // php artisan make:migration create_posts_table
    // add columns you want in the table here
    // php artisan migrate --> to create the table using this schema
    // to change the table you can:
    // 1- php artisan migrate:rollback, then after that: php artisan migrate (these are run after c=modifying the below code)
    // 2- php artisan migrate:fresh --> to drop all tables and recreate them
    Schema::create('posts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('slug');
      $table->string('body');
      $table->timestamps();
      $table->timestamp(('published_at'))->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('posts');
  }
}
