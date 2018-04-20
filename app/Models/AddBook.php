<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class AddBook extends Model {
	protected $table = 'Books';
	protected $fillable = ['code','title','author','rackNo','rowNo','type','class','desc'];
}
