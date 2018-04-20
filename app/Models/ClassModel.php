<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ClassModel extends Model {
	 protected $table = 'Class';
	protected $fillable = ['name','numValue','description'];

}
