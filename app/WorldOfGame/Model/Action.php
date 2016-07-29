<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model;
	public $timestamps = false;
	protected $table = "Action";
	protected $fillables = ["name", "description"];
}