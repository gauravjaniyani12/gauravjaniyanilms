<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class GPA extends Model {
	protected $table = 'GPA';
	protected $fillable = ['for','gpa','grade','markfrom','markto'];
}
