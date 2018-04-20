<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class DormitoryFee extends Model {
	protected $table = 'dormitory_fee';
	protected $fillable = ['regiNo','feeMonth','feeAmount'];
}
