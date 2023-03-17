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
input[type="submit"]{
    font-family:  'Open Sans', sans-serif;
    font-size:20px;
}
.container{
    border:0px solid black;
    width: 35%;
    height: 490px;
    border-radius: 8px;
    margin-top: 130px;
   background-color:#0652DD;
    box-shadow: 5px 5px 20px 0px black;
 }
input,select,position{
    width: 360px;
    height: 36px;
    margin-left: 46px;
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
        margin-top: 6px;
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
    #button:hover{
        opacity: 0.3;
    }
</style>                                                                                                              
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
include'connection.php';
if(isset($_POST['submit2'])){ 
 $b=$_POST['fcode']; 
 $e=$_POST['sem']; 
 $f=$_POST['subject']; 
 $g=$_POST['code']; 
 $query="insert into subject (FCODE,SEM,SUBJECT,SUBJECTCODE) values('$b','$e','$f','$g')"; 
if(mysqli_query($conn,$query)){ ?>
<script>
    alert "Recorde Inserted";
</script>
<?php
     header('location:admin.php');
} 
else{ 
 echo "could not insert record".mysqli_error($conn); 
} 
}
?>
<center>
<div class="container">
    <div style="border: 1px solid black; border-radius: 10px 10px 0px 0px; background-color: black;"><h2 style="color: #ffffff; font-size: 35px;margin: 0px;padding: 10px;margin-bottom: 4px;">Add Subject</h2></div>
<form action="subject.php" method="post">
<div style="margin-top:25px">
<label style="padding-right: 285px; font-weight: bold;">Faculty Code</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">account_box</i></div><input type="text" placeholder="Enter Faculty Code" name="fcode" required></div><br>
 <label  style="padding-right: 288px; font-weight: bold;">Semester</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">class</i></div><input type="text" placeholder="Enter Semester" name="sem" required></div><br>
<label  style="padding-right: 288px; font-weight: bold;">Subject</label><br>
<div class="full">
    <div class="i"><i class="material-icons" style="font-size:32px">class</i></div><input type="text" placeholder="Enter User Subject" name="subject" required></div><br>
<label  font-weight: bold;>Subject Code</label><br>
<div class="full">
<div class="i"><i class="material-icons" style="font-size:34px">description</i></div><input type="text" placeholder="Your Code" name="code"></div><br>
    <input style="height:45px; font-size:25px;font-weight:bold;" type="submit" value="Submit" name="submit2" id="button"></div>
</form>
</div>
</center>
</body>
</html>