<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model{
	public $timestamps = false;
	protected $table = "skills";
	protected $fillables = ["name"];
}
