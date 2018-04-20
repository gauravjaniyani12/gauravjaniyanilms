<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Marks extends Model {
  protected $table = 'Marks';
	protected $fillable = ['regiNo',
	'regiNo',
	'exam',
	'subject',
	'written',
	'mcq',
	'practical',
	'ca'
	];
}
