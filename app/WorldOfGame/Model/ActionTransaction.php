<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionTransaction extends Model;
	public $timestamps = false;
	protected $table = "ActionTransaction";
	protected $fillables = ["userId", "mailTemplateId", "actionId", "message"];
}