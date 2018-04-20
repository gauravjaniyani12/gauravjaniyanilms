<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class FeeCol extends Model {
	protected $table = 'stdBill';
	protected $fillable = ['billNo','class','regiNo','payableAmount','paidAmount','dueAmount','payDate'];
}
