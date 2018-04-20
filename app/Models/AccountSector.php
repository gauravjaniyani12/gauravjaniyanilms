<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AccountSector extends Model {
	protected $table = 'accounting_sector';
	protected $fillable = ['name','type'];
}
