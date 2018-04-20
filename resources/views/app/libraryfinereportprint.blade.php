<!DOCTYPE html>
<html lang="en">
<head>
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
  height: 150px;
  width: 200px;
}
.lefthead{
  width: 30%;
}
.righthead{
  width: 70%;
}
.righthead p{
  margin: 0px;
  padding: 0px;
}
#footer
{

width:100%;
height:50px;
position:absolute;
bottom:0;
left:0;
}
</style>
<link rel="shortcut icon" href="img/abc.png">
</head>

<body >
<div id="admit">
  <table class="bg">
    <tr>
    <td class="lefthead">

     <img class="logo" src="./img/logo.png">
    </td>

   <td class="righthead">
     <h3>{{$institute->name}}</h3><pre>
<p><strong>Establish:</strong> {{$institute->establish}}</p>
<p><strong>Web:</strong> {{$institute->web}}</p>
<p><strong>Email:</strong> {{$institute->email}}</p>
<p><strong>Phone:</strong> {{$institute->phoneNo}}</p>
<p><strong>Address:</strong> {{$institute->address}}</p>
     </pre>
   </td>
   </tr>

 </table>
 <table class="bg2">
   <tr><td>
    Library Report
  </td>
  <td><strong>{{$rdata['name']}}</strong></td>
  <td >
    Month : <strong>{{$rdata['month']}}</strong>
  </td>
</tr>
</table>
<br>

<center>
<h1>
 <strong>Total Fine: {{$rdata['total']}} tk.</strong></h1>

</center>
<div id="footer">
  <p>Print Date: {{date('d/m/Y')}}</p>
</div>
</body>
</html>
