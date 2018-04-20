<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Issuebook extends Model {
	protected $table = 'issueBook';
	protected $fillable = ['regiNo','code','issueDate','returnDate','fine'];
}
