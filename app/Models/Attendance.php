<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Attendance extends Model {
  protected $dates = ['date','created_at'];
  protected $table = 'Attendance';
  protected $fillable = ['student_regiNo','date','created_at'];
  public function student(){
    return $this->belongsTo('App\Models\Student','regiNo');
  }
}
