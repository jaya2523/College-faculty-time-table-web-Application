<?php
$conn=mysqli_connect("localhost:3306","root","","project");

if(! $conn){
   die("Database doesnot connect".mysqli_connect_error());
}
else{
?>
<script>
    alert("Connection  Successful");
</script><?php
    
}
if(isset($_GET['FCODE'])){
$id=$_GET['FCODE'];
$deletequery="delete from dashboard where FCODE ='".$id."'";
$query=mysqli_query($conn,$deletequery);
if($query){ 
header('location:admin.php');
}
    else{
        echo 'Please check query';
    }
}
?>