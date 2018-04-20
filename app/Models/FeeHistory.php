<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class FeeHistory extends Model {
	protected $table = 'billHistory';
	protected $fillable = ['billNo','title','month','fee','lateFee','total'];
	public $timestamps = false;
}
