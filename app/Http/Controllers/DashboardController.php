<?php

namespace App\Http\Controllers;

use Session;
use App\Models\ClassModel;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Marks;
use App\Models\AddBook;
use App\Models\Accounting;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');

    }
	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$error = Session::get('error');
		$success=Session::get('success');
		$tclass = ClassModel::count();
		$tsubject = Subject::count();
		$tstudent=Student::count();
 		$totalAttendance = Attendance::groupBy('date')->get();
 		$totalExam = Marks::groupBy('exam')->groupBy('subject')->get();
		$book = AddBook::count();
 		$total = [
 			'class' =>$tclass,
 			'student' =>$tstudent,
 			'subject' =>$tsubject,
 			'attendance' =>count($totalAttendance),
 			'exam' =>count($totalExam),
			'book' => $book
 		];
 	// 	//graph data
 		$monthlyIncome= Accounting::selectRaw('month(date) as month, sum(amount) as amount, year(date) as year')
 		->where('type','Income')
 		->groupBy('month')
 		->get();

 		$monthlyExpences= Accounting::selectRaw('month(date) as month, sum(amount) as amount, year(date) as year')
 		->where('type','Expence')
 		->groupBy('month')
 		->get();
 		$incomeTotal = Accounting::where('type','Income')
 		->sum('amount');
 		$expenceTotal = Accounting::where('type','Expence')
 		->sum('amount');
 		$incomes=$this->datahelper($monthlyIncome);
 		$expences=$this->datahelper($monthlyExpences);
 		$balance = $incomeTotal - $expenceTotal;
		return View::Make('dashboard',compact('error','success','total','incomes','expences','balance'));
	}
	private function datahelper($data)
 	{
 		$DataKey = [];
 		$DataVlaue =[];
 		foreach ($data as $d) {
 			array_push($DataKey,date("F", mktime(0, 0, 0, $d->month, 10)).','.$d->year);
 			array_push($DataVlaue,$d->amount);

 		}
 		return ["key"=>$DataKey,"value"=>$DataVlaue];

 	}
}
