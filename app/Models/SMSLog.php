<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SMSLog extends Model {
    protected $table = 'smsLog';
    protected $fillable = ['type','sender','message','recipient','regiNo','status'];
}