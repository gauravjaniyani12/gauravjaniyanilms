<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class DormitoryStudent extends Model {
	protected $table = 'dormitory_student';
	protected $fillable = ['regiNo','joinDate','leaveDate','dormitory','roomNo','monthlyFee','isActive'];
}
