
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

        .bg{
            width: 49%;

        }
        .bg2{
            width: 49%;

        }
        .bg3{
            width: 49%;
            border-bottom: solid black 2px;
        }
        /*       .bg3 tr:nth-child(even) {
                 background-color: #81DAF5;
             }
             .bg3 tr:nth-child(odd) {
                 background-color: #82FA58;
             }

           table {
                 border-spacing: 0;
                 border-collapse: separate;

             }  */
   /*    table td{
            padding-left: 5px;
        }
        .thead td{
            border-bottom: solid black 2px;
            font-weight: bold;
            color:blue;
        }
      /*  .red
        {
            color:red;
            font-weight: bold;
        }
        .green {
            color:green;
            font-weight: bold;
        }  */
        .logo{
            height: 85px;
            width: 75px;
            margin: 0px;
        }
        .lefthead{
            width: 15%;
        }
        .righthead{
            width: 95%;
        }
        .righthead p{
            margin: 0px;
            padding: 0px;
        }
        .ab{
            font-family: "Calibri Light";
            font-size: 14px;
        }
        .abc{
            font-family: "Calibri Light";
            font-size: 11.5px;
        }
    /*    .bg3 tr:last-child {
            background-color: #cccccc;


        }
        .bg3 tr:last-child td {
            border-top: solid #000 2px;
            margin-top:10px !important;
        }
        #footer
        {

            width:100%;
            height:50px;
            position:absolute;
            bottom:0;
            left:0;
        } */
    </style>
</head>

<body >
<strong>
<div id="admit">
    <form style="border: groove; float: left;">
    <table class="bg" style="border: groove;">
        <tr>
            <td rowspan="2" class="lefthead">

                <img class="logo" src="./img/logo.png">
            </td>

            <td>
            <!--  <h3>{{$institute->name}}</h3>-->
       <div class="ab righthead">
           SHRI LADHARAM SCHOOL (ENGLISH MEDIUM)
       </div>

            </td>
        </tr>
        <td>
        <div class="abc righthead">  Email:   {{$institute->email}}<br>
        Phone:   {{$institute->phoneNo}}<br>
        Address: {{$institute->address}}<br>
        </div>
        </td>

    </table>
    <table class="bg2" style="border: groove; text-align: center">
        <tr><td>

            </td>
            <td>Fees Receipt</td>
            <td >

            </td>
        </tr>
    </table>

    <center><h2></h2></center>
    <strong>
    <table style="font-size: 12px; border: groove; width: 49%">     <tr>

            <td>Name: &nbsp;{{$stdinfo->lastName}} {{$stdinfo->firstName}} {{$stdinfo->middleName}}</td>
            <td></td>
        </tr>
        <tr>

            <td>Class: &nbsp;<>{{$stdinfo->class}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Section: &nbsp;<strong>{{$stdinfo->section}}</td>
            <td></td>


        </tr>
        <tr>

            <td>Bill No.: &nbsp;{{ $datas[0]->billNo }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Session: &nbsp;{{$stdinfo->session}}</td>
            <td></td>


        </tr>
        <tr>

            <td>G.R. No.: &nbsp;{{$stdinfo->general_register_number}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Roll No.: &nbsp;{{$stdinfo->rollNo}}</td>
            <td></td>

        </tr>
        <tr>


            <td>Date: &nbsp;{{ $datas[0]->date }}
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
            </td>


        </tr>
    </table>

<!-- <br>
<table class="bg3">
   <tbody>
    <tr class="thead">
        <td>Payable Amount</td>
        <td>Paid Amount</td>
        <td>Due</td>
        <td>Pay Date </td>


    </tr>

    @foreach($datas as $data)
    <tr>
        <td><strong>{{$data->payableAmount}}</strong></td>
            <td><strong>{{$data->paidAmount}}</strong></td>
            <td><strong>{{$data->dueAmount}}</strong></td>
            <td><strong>{{$data->date}}</strong></td>


        </tr>



    @endforeach
        <tr>
          <td>Rs. <strong>{{$rdata['payTotal']}}</strong> </td>
      <td>Rs. <strong>{{$rdata['paiTotal']}}</strong> </td>
      <td>Rs. <strong>{{$rdata['dueAmount']}}</strong> </td>
      <td></td>
    </tr>
  </tbody>
</table> -->

    <table class="bg3" border="1px"style="border: groove">
        <tr class="thead">
            <!-- <th>Bill No</th> -->
            <th style="text-align: center;">Description</th>
            <!-- <th>Payable Amount</th> -->
            <th style="width:20%;">Amount</th>
            <!-- <th>Due</th> -->
            <!-- <th>Pay Date</th> -->

        </tr>
        <tbody>
        @foreach($datas as $data)
            <tr>
                <td>
                    @if($data->month > 0)
                        {{ $months[$data->month - 1] }}
                    @else
                        {{ $data->title }}
                    @endif
                </td>
            <!-- <td>{{ $data->payableAmount }}</td> -->
                <td>{{ $data->per_fee_total }}</td>
            <!-- <td>{{ $data->dueAmount }}</td> -->
            <!-- <td>{{ $data->date }}</td> -->
            </tr>
        @endforeach
        <tr>
            <td>Total:</td> <td>{{ $datas[0]->payableAmount }}</td>
        </tr>
        <tr>
            <td>Paid Amount:</td> <td>{{ $rdata['paiTotal'] }}</td>

        </tr>
        <tr>
        <td colspan="2" style="text-align: right;">Sign:______________&nbsp;&nbsp;&nbsp;&nbsp; </td>
        </tr>
        <!-- <tr>
        <td colpan="2">
        <table style="float;right;">
          <tr>
            <td>Total:</td> <td>{{ $datas[0]->payableAmount }}</td>
          </tr>
          <tr>
          <td>Paid Amount:</td> <td>{{$rdata['paiTotal']}}</td>
          </tr>
        </table>

        </td> -->
        <!-- <td><strong>{{$rdata['payTotal']}}</strong></td> -->
        <!-- <td>
        <span style="display:block;">{{ $datas[0]->payableAmount }}</span>
        <span style="display:block;">{{$rdata['paiTotal']}}</span>
        </td> -->
        <!-- <td><strong>{{$rdata['dueAmount']}}</strong></td> -->
        <!-- <td></td> -->
        </tr>
        </tbody>
    </table>
    </strong>
    </form>
  <!--  <div id="footer">
        <p>Print Date: {{date('d/m/Y')}}</p>
    </div>
-->



    <form style="border: groove; float: right;">
        <table class="bg" style="border: groove;">
            <tr>
                <td rowspan="2" class="lefthead">

                    <img class="logo" src="./img/logo.png">
                </td>

                <td>
                <!--  <h3>{{$institute->name}}</h3>-->
                    <div class="ab righthead">
                        SHRI LADHARAM SCHOOL (ENGLISH MEDIUM)
                    </div>

                </td>
            </tr>
            <td>
                <div class="abc righthead">  Email:   {{$institute->email}}<br>
                    Phone:   {{$institute->phoneNo}}<br>
                    Address: {{$institute->address}}<br>
                </div>
            </td>

        </table>
        <table class="bg2" style="border: groove; text-align: center">
            <tr><td>

                </td>
                <td>Fees Receipt</td>
                <td >

                </td>
            </tr>
        </table>

        <center><h2></h2></center>
        <strong>
            <table style="font-size: 12px; border: groove; width: 49%">
                <tr>

                    <td>Name: &nbsp;{{$stdinfo->lastName}} {{$stdinfo->firstName}} {{$stdinfo->middleName}}</td>
                    <td></td>
                </tr>
                <tr>

                    <td>Class: &nbsp;<>{{$stdinfo->class}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Section: &nbsp;<strong>{{$stdinfo->section}}</td>
                    <td></td>


                </tr>
                <tr>

                    <td>Bill No.: &nbsp;{{ $datas[0]->billNo }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Session: &nbsp;{{$stdinfo->session}}</td>
                    <td></td>


                </tr>
                <tr>

                    <td>G.R. No.: &nbsp;{{$stdinfo->general_register_number}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Roll No.: &nbsp;{{$stdinfo->rollNo}}</td>
                    <td></td>

                </tr>
                <tr>


                    <td>Date: &nbsp;{{ $datas[0]->date }}
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
                    </td>


                </tr>
            </table>

        <!-- <br>
<table class="bg3">
   <tbody>
    <tr class="thead">
        <td>Payable Amount</td>
        <td>Paid Amount</td>
        <td>Due</td>
        <td>Pay Date </td>


    </tr>

    @foreach($datas as $data)
            <tr>
                <td><strong>{{$data->payableAmount}}</strong></td>
            <td><strong>{{$data->paidAmount}}</strong></td>
            <td><strong>{{$data->dueAmount}}</strong></td>
            <td><strong>{{$data->date}}</strong></td>


        </tr>



    @endforeach
                <tr>
                  <td>Rs. <strong>{{$rdata['payTotal']}}</strong> </td>
      <td>Rs. <strong>{{$rdata['paiTotal']}}</strong> </td>
      <td>Rs. <strong>{{$rdata['dueAmount']}}</strong> </td>
      <td></td>
    </tr>
  </tbody>
</table> -->

            <table class="bg3" border="1px"style="border: groove">
                <tr class="thead">
                    <!-- <th>Bill No</th> -->
                    <th style="text-align: center;">Description</th>
                    <!-- <th>Payable Amount</th> -->
                    <th style="width:20%;">Amount</th>
                    <!-- <th>Due</th> -->
                    <!-- <th>Pay Date</th> -->

                </tr>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td>
                            @if($data->month > 0)
                                {{ $months[$data->month - 1] }}
                            @else
                                {{ $data->title }}
                            @endif
                        </td>
                    <!-- <td>{{ $data->payableAmount }}</td> -->
                        <td>{{ $data->per_fee_total }}</td>
                    <!-- <td>{{ $data->dueAmount }}</td> -->
                    <!-- <td>{{ $data->date }}</td> -->
                    </tr>
                @endforeach
                <tr>
                    <td>Total:</td> <td>{{ $datas[0]->payableAmount }}</td>
                </tr>
                <tr>
                    <td>Paid Amount:</td> <td>{{ $rdata['paiTotal'] }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">Sign:______________&nbsp;&nbsp;&nbsp;&nbsp; </td>
                </tr>
                <!-- <tr>
        <td colpan="2">
        <table style="float;right;">
          <tr>
            <td>Total:</td> <td>{{ $datas[0]->payableAmount }}</td>
          </tr>
          <tr>
          <td>Paid Amount:</td> <td>{{$rdata['paiTotal']}}</td>
          </tr>
        </table>

        </td> -->
                <!-- <td><strong>{{$rdata['payTotal']}}</strong></td> -->
                <!-- <td>
        <span style="display:block;">{{ $datas[0]->payableAmount }}</span>
        <span style="display:block;">{{$rdata['paiTotal']}}</span>
        </td> -->
                <!-- <td><strong>{{$rdata['dueAmount']}}</strong></td> -->
                <!-- <td></td> -->
                </tr>
                </tbody>
            </table>
        </strong>
    </form>
</body>
</html>
