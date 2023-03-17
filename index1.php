<?php
$conn=mysqli_connect("localhost:3306","root","","project");
if(! $conn){
   die("Database doesnot connect".mysqli_connect_error());
}
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $name=stripcslashes($name);
    $password=stripcslashes($password);
    $name=mysqli_real_escape_string($conn,$name);
    $password=mysqli_real_escape_string($conn,$password);
    $sql="select * from dashboard where NAME='$name' and FCODE='$password'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($name=='admin' && $password=='pass@123'){
        include 'admin.php';
                 }
    
    elseif($count==1){
        include 'dashboard.php';
                 }
    else{
        echo "login failed".mysqli_error($conn);
    }
}
?>
