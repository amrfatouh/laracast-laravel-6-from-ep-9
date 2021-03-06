<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('assignments', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('body');
      $table->boolean('completed')->default(false);
      $table->timestamps();
      $table->timestamp('due_date');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('assignments');
  }
}
