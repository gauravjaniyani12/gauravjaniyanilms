<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model {
	protected $table = 'accounting';
	protected $fillable = ['name','type','amount','date','description'];
}
