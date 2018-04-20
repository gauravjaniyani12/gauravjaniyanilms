<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Settings extends Model {
    protected $table = 'users';
    protected $fillable = ['firstname','lastname','login','email','address','password'];
}