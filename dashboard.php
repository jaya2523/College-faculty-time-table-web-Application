<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    background:linear-gradient(to right,#D2042D,#e84118,#D2042D);
        border-radius: 5px;
        border: 4px solid #D2042D;
      cursor: pointer;
         box-shadow:5px 5px 2px 0px #b2bec3 ;
        outline: none;
        
    
    }
    input:hover{
        opacity: 0.3;
        
    }
    input[type="button"]
{
    font-size:20px;
    font-family:  'Roboto', sans-serif;
    padding: 10px;
    font-weight: 400;
    outline: none;
    color: #ffffff;

}
    div{
        text-align: center;
    }
    table td {
  border-right: solid 2px  #dfe4ea; 
  border-left: solid 2px  #dfe4ea;
}
</style>
</head>
<body>
<table class="content-table">
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>MOBILE</th>
<th>EMAIL</th>
<th>DEPARTMENT</th>
<th>
</th>
</tr></thead>
<tbody>
<?php
$conn=mysqli_connect("localhost:3306","root","","project");
if(! $conn){
   die("Database doesnot connect".mysqli_connect_error());
}
else{
}
$sql="select * from dashboard";
$query=mysqli_query($conn,$sql);  
$nums  =mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
?>
<tr> 
<td><?php echo $res['id']?></td>
<td><?php echo $res['NAME']?></td>
<td><?php echo $res['MOBILE']?></td>
<td><?php echo $res['EMAIL']?></td>
<td><?php echo $res['DEPARTMENT']?></td>
<td><div><form>
<input type="button" value="select" name="click" onclick="show()"/>
</form></div></td>
</tr>
<?php
}
?>  
</tbody>
</table>
<script>
    function show(){
        window.location = "tt1.php";
    }
</script>
</body>
</html> 