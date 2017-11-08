<!doctype html>
<head>

<style>
/*css file*/

input.mc:focus
{
  border: 1px solid grey;
  background-color: #f2f2f2;

}

input.mc
{
    width: 75%;
    height: 43px;
    padding: 12px 20px;
    margin-left: 80px;
    margin-top: 25px;
    display: inline-block;
    border: 1px solid #ccc;                             
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    box-sizing: border-box;
    font-style: courier;
    

}



button.buttoon
{
  
  float: right;
  margin-right: 97px;
  margin-top: -43px;

  background-color:green;
  border-top-right-radius:  4px;
  border-bottom-right-radius: 4px;
  color: white;
  font-family: verdana;
  font-size: 17px;
  height:43px; 
  width:160px;
  cursor: pointer;
    border: 2px solid green;
}


div.bc
{
	display: inline;

}
input.x
{

    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-style: courier;


}
div.xx{
	margin-left:80px;
	font-size: 25px;
	color: white;

}

div.xz{
	
	float:right;
	margin-right: 50px;
	margin-top: -100px;
	font-size: 20px;
	color: white;
}




li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    text-decoration: none;

}



li.dropdown {
    display: inline-block;

}

.dropdown-content {
    display: none;
    position: absolute;
    
    background-color: #2A88AD;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;

}

.dropdown-content a {
    color:white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;

}
.dropbtn:hover{
  
}







.container {
  position: relative;
  width:20%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
    
}


.overlay {
  position:absolute;
  top: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: .8;
   box-shadow: 0px 4px 8px rgba(0,0,0,0.7);
  transition-duration: 0.4s;
  cursor: pointer;
}

.text {
  color: white;
  font-weight:bold;
  font-size: 30px;
  position: absolute;
  top: 85%;
  left: 5%;
  
}
	
*{
  margin:0;
  padding:0;
}

</style>
<script>
 function validateForm() {
   var y = document.forms["myForm"]["subscribe_mail"].value;                 /*value of entered email stored in y*/
    if(y=="")
    {
      alert("Enter your email");
      return false;
    }
    }
</script>
	<title>
		Our Team
	</title>
	<link rel="stylesheet" type="text/css" href="css/team.css">
</head>
<body>

<div id="menu">
<ul>
<li style="float: left;"><a  href="index.php">Home&emsp;</a></li>



<li class="dropdown" style="float:left;">

<a href="#" class="dropbtn">Categories&emsp;</a>

   <div class="dropdown-content">

   <a href="category/web.php">Web Development</a>
      <a href="category/android.php">Android Development</a>
      <a href="category/comp.php">Computer Technology</a>
       <a href="category/others.php">Others</a>
     
   </div>

</li>




<li style="float: left;"><a  href="posts.php">Post</a></li>
<li style="float: left;"><a  href="team.php">&emsp;team</a></li>
<li style="float: right;"><a href="#">
<?php

include 'connect.php';
session_start();
//$name=$_SESSION['username'];
    if(isset($_SESSION['signed_in'])==true)
    {
        $name=$_SESSION['username'];
        echo "<a href='profile.php'>Hello ".$name." </a>";
    }
    else
    {
        echo '<a href="signin.php">LogIn</a>';
    }

?>
</a></li>
<li style="float: right;"><a href="#">
<?php
    if(isset($_SESSION['signed_in'])==true)
    {
        echo '<a href="signout.php">LogOut</a>';
    }
    else
    {
        echo '<a href="signup.php">SignUp</a>';
    }

?>
&emsp;</a></li>
</ul>
</div>

<div style="background-image:url('images/team2.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:700px;">
<h1 align="center" style="font-family: verdana;font-weight: bold;font-size: 65px">Our Team</h1>



<div>

<div style="margin-left:200px;width:100%;">
<div class="container">
 <img class="image"  src="images/deepak.jpg" >
  <div class="overlay">
    <div class="text">Deepak Kumrawat</div>
  </div>
</div>
</div>


<div align="center" style="margin-top:-442px; width:100% ;">

<div class="container">
  <img  class="image" src="images/hitesh.jpg" >
  <div class="overlay">
    <div class="text">Hitesh Ahuja</div>
  </div>
</div>

</div>

<div align="right" style="float:right;margin-top:-440px;width:100%;margin-right: 200px">
<div class="container">
  <img class="image" src="images/divya.jpg">
  <div class="overlay">
    <div class="text">Divya Lakhwani</div>
  </div>
</div>
</div>




	
</div>
</div>





<div style="background-color:black;border-radius: 6px;width: 1350px; height: 340px;">

<form method="post" action="subscribe.php" onsubmit="return validateForm()" name="myForm">

<input class="mc" type="text" name="subscribe_mail" placeholder="Email..." ><br>

<button type="submit" class="buttoon">Subscribe</button>

</form>

<br><br>

<div class="xx">
<h3>Contact Us:</h3>
<p style="font-size: 20px">Room No. 152,BH-2,<br>IIITM Gwalior,<br>474015</p>
</div>


<div class="xz">
:7441183308<br>
:7898378532<br>
:techon.services@gmail.com<br>
</div>

<div style="float: right;margin-right: 280px;margin-top:-100px">
<img src="icons/call.png" style="width: 22px"><br>
 <img src="icons/whatsapp.png" style="width: 22px;"><br>
<img src="icons/gmail.png" style="width: 22px"><br>
</div>




<p align="center" style="text-align:center; font-size: 20px; font-weight:bold; color:white;">All Rights Reserved || TechOn.com</p>


</div>

</body>
