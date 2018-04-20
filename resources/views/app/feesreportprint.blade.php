
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/abc.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>

.bg{
 width: 100%;
 background-color:#dcdcdc;
}
.bg2{
 width: 100%;
background-color:#cccccc;
}
.bg3{
  width: 100%;

}
.bg3 tr:nth-child(even) {
    background-color: #81DAF5;
}
.bg3 tr:nth-child(odd) {
    background-color: #82FA58;
}

table {
border-spacing: 0;
border-collapse: separate;

}
table td{
padding-left: 5px;
}
.thead td{
  border-bottom: solid green 2px;
  font-weight: bold;
  color:blue;
}
.red
{
  color:red;
  font-weight: bold;
}
.green {
  color:green;
  font-weight: bold;
}
.logo{
  height: 170px;
  width: 150px;
}
.lefthead{
  width: 20%;
}
.righthead{
  width: 80%;
}
.righthead p{
  margin: 0px;
  padding: 0px;
}
.bg3 tr:last-child {
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
bottom: 0px;
left:0;
}
</style>
</head>

<body >
<div id="admit">
  <table class="bg">
    <tr>
    <td class="lefthead">

     <img class="logo" src="./img/logo.png">
    </td>

   <td class="righthead">
  <!--   <h3>{{$institute->name}}</h3>  -->
      <h2>SHRI LADHARAM SCHOOL (ENGLISH MEDIUM)</h2>
  <pre>
<p><strong>Email:</strong> {{$institute->email}}</p>
<p><strong>Phone:</strong> {{$institute->phoneNo}}</p>
<p><strong>Address:</strong> {{$institute->address}}</p>
     </pre>
   </td>
   </tr>

 </table>
 <table class="bg2">
   <tr>
    <td>

  </td>
  <td>  <strong>Fees Collection Report</strong></td>
  <td >

  </td>
</tr>
</table>
<br>
<center><h2>Collection Time Period</h2></center>
<table style="width: 100%;">
<tr>
   <td><td>
  <td>From Date:  &nbsp;  <strong>   {{$rdata['sDate']}}</strong></td>
  <td></td>
  <td>To Date:   &nbsp;&nbsp;<strong>   {{$rdata['eDate']}}</strong></td>

</tr>
</table>
<br>
<table id="datat" class="bg3">
  <tbody>
    <tr class="thead">
        <td>Payable Amount</td>
        <td>Paid Amount</td>
        <td>Due</td>

    </tr>


    <tr>
      <td>Rs.  <strong>{{$datas->payTotal}}</strong>
           </td>
      <td>Rs.  <strong>{{$datas->paiTotal}}</strong>   </td>
      <td>Rs.  <strong>{{$datas->dueamount}}</strong> </td>

    </tr>
  </tbody>
</table>
<br>
<center>-----0-----</center>
<div id="footer">
  <p>Print Date: {{date('d/m/Y')}}</p>
</div>
</div>
</body>
</html>
