@extends('layouts.master')
@section('style')
    <link href="/css/bootstrap-datepicker.css" rel="stylesheet">

@stop
@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>Process Success.</strong><br>{{ Session::get('success')}}<br>
        </div>
    @endif
    @if (Session::get('error'))
        <div class="alert alert-warning">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>{{ Session::get('error')}}</strong>
            {{$formdata->session}}
        </div>
    @endif

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-book"></i> Gradesheet</h2>

                </div>
                <div class="box-content">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form role="form" action="/tabulation" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="class">Class</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home blue"></i></span>
                                            {{ Form::select('class',$classes,$formdata->class,['class'=>'form-control','required'=>'true'])}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="section">Section</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                            <?php  $data=[
                                                    'A'=>'A',
                                                    'B'=>'B',
                                                    'C'=>'C',
                                                    'D'=>'D',
                                                    'E'=>'E',
                                                    'F'=>'F',
                                                    'G'=>'G',
                                                    'H'=>'H',
                                                    'I'=>'I',
                                                    'J'=>'J'
                                            ];?>
                                            {{ Form::select('section',$data,$formdata->section,['class'=>'form-control','required'=>'true'])}}


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="shift">Shift</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                            <select id="shift" name="shift"  class="form-control" >
                                                <option value="Morning">Morning</option>
                                                <option value="Day">Day</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label for="session">session</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                            <input value="{{date('Y')}}" type="text" id="session" required="true" class="form-control datepicker2" name="session" value="{{$formdata->session}}"  data-date-format="yyyy">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="exam">Examination</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                            <?php  $data=[
                                                    'Class Test'=>'Class Test',
                                                    'Model Test'=>'Model Test',
                                                    'First Term'=>'First Term',
                                                    'Mid Term'=>'Mid Term',
                                                    'Final Exam'=>'Final Exam'
                                            ];?>
                                            {{ Form::select('exam',$data,$formdata->exam,['class'=>'form-control','required'=>'true'])}}


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary pull-right"  type="submit"><i class="glyphicon glyphicon-th"></i>Get Sheet</button>

                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $(".datepicker2").datepicker( {
                format: " yyyy", // Notice the Extra space at the beginning
                viewMode: "years",
                minViewMode: "years",
                autoclose:true

            });
            $('#markList').dataTable();
        });
    </script>
@stop
