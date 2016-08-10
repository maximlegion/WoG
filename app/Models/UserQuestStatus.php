<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuestStatus extends Model{
	public $timestamps = false;
	protected $table = "user_quest_statuses";
	protected $fillables = ["name"];
}