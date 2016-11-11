<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
	 
	 //alternative
	 //protected $guarded = ['id'];
}
