<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToPostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  // to add a column run the command
  // php artisan make:migration add_title_to_posts_table
  // this command will create a new file
  // add the column you want in up() method and add the dropping code in down() method
  // run: php artisan migrate
  // run: php artisan migrate:rollback --> to cancel the last migration
  public function up()
  {
    Schema::table('posts', function (Blueprint $table) {
      $table->string('title');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('posts', function (Blueprint $table) {
      $table->dropColumn(('title'));
    });
  }
}
