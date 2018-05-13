<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'is_done'];

    protected $casts = [
      'is_done' => 'boolean',
    ];
}

// curl -XPOST http://127.0.0.1:8000/api/tasks -d 'name=Learn Vue.js'
