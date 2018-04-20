<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Dormitory extends Model {
	protected $table = 'dormitory';
	protected $fillable = ['name','numOfRoom','address','description'];
}
