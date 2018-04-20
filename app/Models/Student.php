<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Student extends Model {
	protected $table = 'Student';
	protected $fillable = ['regiNo',
	'firstName',
	'lastName',
	'middleName',
	'gender',
	'religion',
	'bloodgroup',
	'nationality',
	'dob',
	'session',
	'class',
	'photo',
	'fatherName',
	'fatherCellNo',
	'motherName',
	'motherCellNo',
	'presentAddress',
	'parmanentAddress',
	'general_register_number',
	'uid_number',
	'adhar_card_number',
  'admissiondate'
];

protected $primaryKey = 'id';
public function attendance(){
	$this->primaryKey = "regiNo";
	return $this->hasMany('App\Models\Attendance','regiNo');
}

}
