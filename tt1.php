<html>
<head>
<style>
 body{
         font-family: 'Roboto', sans-serif;
    }
    .content-table {
  border-collapse: collapse;
 
  font-size: 20px;
  min-width: 100%;
/*  border-radius: 25px 25px 0 0;*/
  overflow: hidden;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.30);
}
    thead tr {
  background-color: #D2042D;
  color: #ffffff;
  text-align: left;
  font-weight: bold ;
      
}
   
    tbody th{
        font-size: 23px;
        width:300px;
        padding: 12px 10px;
        font-weight: bold;
    }  
    thead th{
        padding: 25px 20px;width:300px;
    }
    tbody td{
        font-size: 18px;
       text-align: center;
    }
     tbody tr {
  border-bottom: 1px solid #dfe4ea;
}
    tr:nth-of-type(even) {
  background-color: #f1f2f6;
}
/*
    tbody tr:last-of-type {
  border-bottom: 5px solid #D2042D ;
}
*/
   #id{
    background:linear-gradient(to right,#D2042D,#e84118,#D2042D);
        border-radius: 0px 10px 10px 0px;
        border: 4px solid #D2042D;
      cursor: pointer;
/*         box-shadow:5px 5px 2px 0px #b2bec3 ;*/
       height: 50px;
    
    }
    input[type="submit"]
{
    font-size:20px;
    font-family:  'Roboto', sans-serif;
    padding: 6px;
    font-weight: 400;
    color: #ffffff;

}
    form{
        padding: 0px;
        margin: 0px;
    }
   
    input{
  margin-top: 30px;
        border-radius: 10px 0px 0px 10px;
        border: 2px solid black;
    
    }

    div{
        text-align: center;
    }
    table td {
  border-right: solid 2px  #dfe4ea; 
  border-left: solid px  #dfe4ea;
}
    .th{
  border-right: solid 2px  #dfe4ea; 
  border-left: solid px  #dfe4ea;
          height: 100px;
}
    }
    table,th,td{
        height: 100px;
/*        width: 300px;*/
    }
    .table{
        width: 1000px;
        font-size: 23px;
        text-align: left;
        border: 2px solid #dfe4ea;
        padding: 10px;
        border-collapse: collapse;
       
    }
    input[type="text"]{
        font-size: 20px;
        padding: 0px;
    }
    .a{
/*        margin-top: 100px;*/
        padding-top: 80px;
        padding-bottom: 15px;
        font-size: 20px;
        font-weight: bold;
    }
    a:link {
  color: #3742fa;
  background-color: transparent;
 
}

a:visited {
  color:#3742fa;
  background-color: transparent;

}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
    
    marquee{
        font-weight:bold;font-size:25px; position: absolute; padding-top:15px;
       
        
    }
</style>
</head>
<body>
<img src="download.png">
<?php
include 'connection.php';
if(isset($_POST['search'])){
$id=$_POST['FCODE'];
$sql="select* from dashboard where FCODE='$id'";
$query=mysqli_query($conn,$sql);
if($query){
while($res=mysqli_fetch_array($query)){?>
<marquee scrollamount="15">Welcome <?php echo $res['NAME']?><span style="margin-left:5in;"></span>Welcome <?php echo $res['NAME']?><span style="margin-left:5in;"></span>Welcome <?php echo $res['NAME']?></marquee><?php
}
}
}?>
<center><table class="table" style="margin-top:25px;"><tmain>
<tr>
<form method="post" action="tt1.php">
    <input style="width:350px;height:50px;"type="text" placeholder=" PLease Enter your Faculty Code" name="FCODE">
    <input type="submit" name="search" id="id">
    </form>
    </tr>

<tr>
<th style="color:  #D2042D; border: 2px solid #dfe4ea;
        padding: 10px;
        border-collapse: collapse;">Your Subjects</th>
<th style="color: #D2042D; border: 2px solid #dfe4ea;
        padding: 10px;
        border-collapse: collapse;">Subject Code</th>
</tr>

<?php
include 'connection.php';
if(isset($_POST['search'])){
$id=$_POST['FCODE'];
$sql="select* from subject where FCODE='$id'";
$query=mysqli_query($conn,$sql);
if($query){
while($res=mysqli_fetch_array($query)){
?>
<tr>
<td style=" font-size: 23px;
        width:300px;
        padding: 12px 10px;
        font-weight: bold;text-align:left;"> <?php echo $res['SUBJECT']?></td>
<td style=" font-size: 23px;text-align:left;
        width:300px;
        padding: 12px 10px;
        font-weight: bold;text-align:left;"><?php echo $res['SUBJECTCODE']?></td>
</tr>
<?php
}
}
}
?>
    </tmain>
</table>
    </center>
<center><div class="a">
<?php
if(isset($_POST['search'])){
$id=$_POST['FCODE'];
$sql="select* from dashboard where FCODE='$id'";
$query=mysqli_query($conn,$sql);
if($query){
while($res=mysqli_fetch_array($query)){?>
    <a target="_blank" href="#" style="text-transform: uppercase;"><?php echo $res['NAME']?></a></div><?php
}
}
}?>
    </center>
<table class="content-table">
<thead>
<tr style="text-align:center">
<th class="th" style="text-align:left">WEEKDAYS</th>
<td>10:00-11:00</td>
<td>11:00-12:00</td>
<td>12:00-1:00</td>
<td>1:00-1:30</td>
<td>1:30-2:30</td>
<td>2:30-3:30</td>
</tr></thead>
<tbody>
<?php
include 'connection.php';
if(isset($_POST['search'])){
$id=$_POST['FCODE'];
$sql="select * from timetable where FCODE='$id'";
$query=mysqli_query($conn,$sql);  
$nums  =mysqli_num_rows($query);
if($query){
while($res=mysqli_fetch_array($query)){
?>
<tr>
<th style="  text-align: left;" class="th"><?php echo $res["WEEKDAYS"]?></th>
<td><?php echo $res["10:00-11:00"]?></td>
<td><?php echo $res["11:00-12:00"]?></td>
<td><?php echo $res["12:00-1:00"]?></td>
<td><?php echo $res["1:00-1:30"]?></td>
<td><?php echo $res["1:30-2:30"]?></td>
<td><?php echo $res["2:30-3:30"]?></td>
</tr>
<?php 
                                      }  }
}?>
</tbody>
</table>
</body>
</html>