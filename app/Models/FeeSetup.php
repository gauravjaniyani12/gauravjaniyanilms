<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class FeeSetup extends Model {
	protected $table = 'feesSetup';
	protected $fillable = ['class','type','title','fee','Latefee','description'];
}
