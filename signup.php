<!doctype html>
<html>
<head>
  <title>
    sign up
  </title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  
</head>
<script>
   
    function validatePost() {
    var x = document.forms["myForm"]["name"].value;
    if (x == "") 
        {
        alert("Name must be filled out");
        return false;
      }
                      
       
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
      var z = document.forms["myForm"]["contact"].value;
    if (z == "") 
        {
        alert("Contact Number must be filled out");
        return false;
      }
      var p = document.forms["myForm"]["username"].value;
    if (p == "") 
        {
        alert("Username must be filled out");
        return false;
      }
     var x = document.forms["myForm"]["password"].value;
    if (x == "") 
        {
        alert("password must be filled out");
        return false;
      }

    var x = document.forms["myForm"]["password_check"].value;
    if (x == "") 
        {
        alert("Confirm password must be filled out");
        return false;
      }



      var q = document.forms["myForm"]["password"].value;
      var r = document.forms["myForm"]["password_check"].value;
      if(q!=r){
    alert("Passwords do not match");
        return false;
      }
    }
  </script>
<body>
<?php

include 'nvgbar.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1>Sign Up Now!<span>It is completely free and will take less then 30 Seconds!!</span></h1>
</center>
</div>
<div style="background-image:url('images/team.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:100%;">

  <form method="post" action="signuppost.php" class="signup" name="myForm" onsubmit="return validatePost()" >
  <fieldset class="account-info">
  <label>
      Your Name
      <input type="text" name="name">
    </label>
        <label>
    Gender<br>
    <select name="gender">
    <option value="male" >Male</Option>
    <option value="female">Female</Option>
    <option value="other">Other</Option>
  </select>
    </label>
    <label>
      Email
      <input type="text" name="email">
    </label>
    <label>
      Contact Number
      <input type="text" name="contact">
    </label>
    <label>
      Username
      <input type="text" name="username">
    </label>
    <label>
      Password
      <input type="Password" name="password">
    </label>
     <label>
      Confirm Password
      <input type="Password" name="password_check">
    </label>


  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="SignUp">
  </fieldset>
</form>
</div>
<br><br>
<?php

include 'footer.php';

?>
</body>
</html>