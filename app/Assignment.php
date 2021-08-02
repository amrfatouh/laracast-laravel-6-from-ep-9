<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// we created Assignment.php model file using: php artisan make:model -mc
// we also created migration & controller files in the previous command

// to create a new assignment from console:
// php artisan tinker
// $assignment = new App\Assignment;
// $assignment->body = "make the bed";
// $assignment->due_date = "2022 01 01 12:00:00";
// $assignment->save();

// to mark an assignment in the database as complete from console:
// php artisan tinker
// App\Assignment::first()->complete();
class Assignment extends Model
{
  public function complete()
  {
    $this->completed = true;
    $this->save();
  }
}
