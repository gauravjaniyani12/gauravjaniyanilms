@extends('layouts.master')

@section('content')
@if (Session::get('success'))
<div class="alert alert-success">
  <button data-dismiss="alert" class="close" type="button">×</button>
    <strong>Process Success.</strong><br>{{ Session::get('success') }}<br>
</div>

@endif
@if (Session::get('error'))
    <div class="alert alert-warning">
        <button data-dismiss="alert" class="close" type="button">×</button>
        <strong> {{ Session::get('error')}}</strong>

    </div>
@endif
<div class="row">
<div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><i class="glyphicon glyphicon-book"></i> Paid List</h2>

            </div>
            <div class="box-content">

                <div class="row">
                    <div class="col-md-12">

                        <form role="form" action="/fees/paid-list" method="post" enctype="multipart/form-data">
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="class">Month</label>
                                            <?php

                                                        $months = array(
                                                            'January',
                                                            'February',
                                                            'March',
                                                            'April',
                                                            'May',
                                                            'June',
                                                            'July ',
                                                            'August',
                                                            'September',
                                                            'October',
                                                            'November',
                                                            'December',
                                                        );

                                            ?>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home blue"></i></span>
                                                {{ Form::select('month',$months,$formdata->month,['class'=>'form-control','required'=>'true'])}}
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">&nbsp;</label>
                                              <div class="input-group">
                                        <button class="btn btn-primary pull-right"  type="submit"><i class="glyphicon glyphicon-th"></i>Get List</button>
                                      </div>
                                      </div>
                                    </div>


                                </div>
                            </div>


                            <br>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                <table id="feeList" class="table table-striped table-bordered table-hover">
                                                         <thead>
                                                             <tr>
                                                                <td>First Name</td>
                                                                <td>Middle Name</td>
                                                                <td>Last Name</td>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                           @foreach($students as $student)
                                                             <tr>
                                                                <td>{{ $student->firstName }}</td>
                                                                <td>{{ $student->middleName }}</td>
                                                                <td>{{ $student->LastName }}</td>
                                                             </tr>
                                                           @endforeach
                                                           </tbody>
                     </table>
                        </div>
                    </div>
                                <br><br>


        </div>
    </div>
</div>
</div>
@stop
@section('script')

<script type="text/javascript">
    $( document ).ready(function() {
        $('#feeList').dataTable();
    });
</script>
@stop
