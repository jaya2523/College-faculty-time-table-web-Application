function show(){
var name=document.getElementById("1").value;
var name2=document.getElementById("2").value;
var name3=document.getElementById("3").value;
var name4=document.getElementById("4").value;
var name5=document.getElementById("5").value;
var name7=document.getElementById("7").value;
if(name==""){document.getElementById("a").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("1").style.border="3px solid red";
return false;
            }
 if(name2==""){document.getElementById("b").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("2").style.border="2px solid red";
              return false;}
 if(name3==""){document.getElementById("c").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("3").style.border="2px solid red";
              return false;}
if(name3.length<=9){document.getElementById("c").innerHTML=
"<br>*Please Enter valid Phone no";
document.getElementById("3").style.border="2px solid red";
              return false;}
var name6=document.getElementById("6").value;
if(name6=="select"){document.getElementById("f").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("6").style.border="2px solid red";
                   return false;}


 if(name4==""){document.getElementById("d").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("4").style.border="2px solid red";
              return false;}
 if(name5==""){document.getElementById("e").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("5").style.border="2px solid red";
              return false;}
 if(name7==""){document.getElementById("g").innerHTML=
"<br>*Do not Leave Field Empty";
document.getElementById("7").style.border="2px solid red";
              return false;}
}