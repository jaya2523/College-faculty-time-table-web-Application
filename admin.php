<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    body{
         font-family: 'Roboto', sans-serif;
    }
    .content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 30px;
  min-width: 100%;
  border-radius: 25px 25px 0 0;
  overflow: hidden;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.30);
}
    thead tr {
  background-color: #D2042D;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
       
      
}
    .material-icons.md-36 { font-size: 36px;color: #0000FF }
   
    tbody td{
        font-size: 23px;
        padding: 12px 10px;
        font-weight: bold;
    }  
    thead th{
        padding: 25px 20px;
    }
     tbody tr {
  border-bottom: 1px solid #dfe4ea;
}
    tr:nth-of-type(even) {
  background-color: #f1f2f6;
}
    tbody tr:last-of-type {
  border-bottom: 5px solid #D2042D ;
}
    form{
        padding: 0px;
        margin: 0px;
    }
   
    input{
    background:transparent;
        border: 0px;
      cursor: pointer;
        outline: none;
        margin-left: 1020px;
          width: 130px;
    height: 40px;
        margin-right:20px;
    position: absolute;
    }
    input[type="submit"]:hover{
       color: black;
    }
    input[type="submit"]
{
    font-size:16px;
    font-weight: 600;
color: #636e72;
  

}
    div{
        text-align: center;
    }
    table td {
  border-right: solid 2px  #dfe4ea; 
  border-left: solid 2px  #dfe4ea;
}
</style>
<script>
    function show(){
window.location="signform.php";
    }
        function show2(){
window.location="subject.php";
    }
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<img style="position:absolute;top:15px;" src="download.png">
<input type=submit value="ADD TEACHER" style="top:45px;" onclick="show()">
<div style="border:1px solid #636e72;height:20px; background-color: #636e72; width:1px;margin-left:1174px;margin-bottom:0px;margin-top:50px;"></div>
<input type=submit value="ADD SUBJECT" style="margin-left:1200;top:45px;" onclick="show2()">
<table class="content-table" style="margin-top:80px;">
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>MOBILE</th>
<th>EMAIL</th>
<th>DEPARTMENT</th>
<th colspan="2">OPERATION
</th>
</tr></thead>
<tbody>
<?php

$conn=mysqli_connect("localhost:3306","root","","project");
if(! $conn){
   die("Database doesnot connect".mysqli_connect_error());
}
//else{
?>
<!--
<script>
    alert("Connection  Successful");
</script>
-->
<?php
//}
$sql="select * from dashboard";
$query=mysqli_query($conn,$sql);     
$nums  =mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
?> 
<tr> 
<td><?php echo $res['FCODE']?></td>
<td><?php echo $res['NAME']?></td>
<td><?php echo $res['MOBILE']?></td>
<td><?php echo $res['EMAIL']?></td>
<td><?php echo $res['DEPARTMENT']?></td>
    <td style="width:30px;"><a href="delete.php?FCODE=<?php echo $res['FCODE']?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="material-icons md-36" style="padding-left:28px;cursor:pointer;color:#D2042D" name="delete">delete</i></a></td><td style="width:30px;">
    <a href="update.php?FCODE=<?php echo $res['FCODE']?>"  data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class='fas fa-edit' style="font-size:30px;position:absolute;cursor:pointer;color:#009432;padding-left:25px;margin-top:-12px"></i></a></td>
</tr>
<?php
}
?>  
</tbody>
</table>
</body>
</html> 