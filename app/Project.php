<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class); //selecte * from users where id = $this->user_id
  }
}
