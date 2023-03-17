<html>
<head>
<style>
body{
    font-family:  'Open Sans', sans-serif;
       background-color: #1e90ff;
    
}
input[type="text"]{
    font-family:  'Open Sans', sans-serif;
    font-size:16px;
}
input[type="email"]{
    font-family:  'Open Sans', sans-serif;
    font-size:16px;
}
input[type="submit"]{
    font-family:  'Open Sans', sans-serif;
    font-size:20px;
}
.container{
    border:0px solid black;
    width: 35%;
    height: 750px;
    border-radius: 8px;
    margin-top: 35px;
   background-color:#0652DD;
    box-shadow: 5px 5px 20px 0px black;
 }
input,select,position{
    width: 360px;
    height: 36px;
    margin-left: 51px;
border-radius: 0px 6px 6px 0px;
    border: none;
}
    #button{
        border-radius: 20px;
        margin-right: 45px; 
        background:linear-gradient(to right,black,#222f3e,black); color:#FFFFFF; 
      border: none; /* <-- This thing here */
      border:solid 2px;
    cursor: pointer;
    outline: none;
        margin-top: 8px;
    }
    i{
        position: absolute;
      left: 3px;
    }
    .i{
        background-color: #dfe6e9;
        border: 0px solid black;
        height: 36px;
        width:40px;
        position: absolute;
        margin-left: 68px;
        border-radius: 6px 0px 0px 6px;
        border: none;
       
    }
    label{
       padding-right: 285px;
        color: #ffffff;
        font-weight: bold;
        
        
    }
    .full{
        margin-top: 3px;
    }
    #button:hover{
        opacity: 0.3;
    }
       span{
        font-size: 18px;
        color: red;
        font-weight: 1000;
           text-align: left;
        
    }
</style>                                                                                                              
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<center>
<div class="container">
    <div style="border: 1px solid black; border-radius: 10px 10px 0px 0px; background-color: black;"><h2 style="color: #ffffff; font-size: 35px;margin: 0px;padding: 10px;margin-bottom: 4px;">Add Teacher</h2></div>
<form action="signform.php" method="post"  onsubmit="return show()">
<div style="margin-top:25px">
<label style="padding-right: 330px; font-weight: bold;">Name</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">person</i></div><input type="text" placeholder="Enter User Name" name="name" id="1"><span id="a"></span></div><br>
<label style="padding-right: 285px; font-weight: bold;">Faculty Code</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">account_box</i></div><input type="text" placeholder="Enter Faculty Code" name="fcode" id="2"><span id="b"></span></div><br>
<label style="padding-right: 330px; font-weight: bold;">Mobile</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">call</i></div><input type="text" placeholder="Enter Mobile no." name="mobile" id="3"><span id="c"></span></div><br>
<label  style="padding-right: 340px; font-weight: bold;">Email</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">email</i></div><input type="email" placeholder="Enter User Email" name="email" id="4"><span id="d"></span></div><br>
    <label  style="padding-right: 288px; font-weight: bold;">Department</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">group</i></div><input type="text" placeholder="Enter User Department" name="dept" id="5"><span id="e"></span></div><br>
<label>Select Subject</label><br>
<div class="full">
<div class="i"><i class="material-icons" style="font-size:32px">class</i></div><select style="font-family:  'Open Sans', sans-serif; font-size: 18px;" name="subject" id="6">
<option>--Select Subject--</option>
<?php
include 'connection.php';
$sql="select * from subject";
$query=mysqli_query($conn,$sql);  
$nums  =mysqli_num_rows($query);
if($query){
while($res=mysqli_fetch_array($query)){
?>
      <option><?php echo  $res["SUBJECT"]?></option>;<?php
}
}
?>
</select><span id="f"></span></div><br>
<label  font-weight: bold;>Subject Code</label><br>
<div class="full">
<div class="i"><i class="material-icons" style="font-size:34px">description</i></div><input type="text" placeholder="Your Code" name="code" id="7"><span id="g"></span></div><br>
    <input style="height:45px; font-size:25px;font-weight:bold;" type="submit" value="Submit" name="submit" id="button"  ></div>
</form>
</div>
</center>
<?php
if(isset($_POST['submit'])){ 
 $a=$_POST['name']; 
 $b=$_POST['fcode']; 
 $c=$_POST['mobile']; 
 $d=$_POST['email']; 
 $e=$_POST['dept']; 
 $f=$_POST['subject']; 
 $g=$_POST['code']; 
 $query="insert into dashboard(NAME,FCODE,MOBILE,EMAIL,DEPARTMENT,SUBJECT,SUBJECTCODE) values('$a','$b','$c','$d','$e','$f','$g')"; 
if(mysqli_query($conn,$query)){?>
<script> window.location="admin.php"</script>
<?php
   
} 
else{ 
 echo "could not insert record".mysqli_error($conn); 
   
} 
}
?>
    <script type="text/javascript" src="validation.js"></script>
</body>
</html>