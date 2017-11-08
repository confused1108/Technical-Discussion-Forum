<!doctype html>
<html>
<head>
  <title>
    sign in
  </title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <script>
  function validatePost() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") 
        {
        alert("Username is required");
        return false;
      }
      var y = document.forms["myForm"]["password"].value;
    if (y == "") 
        {
        alert("Password is required");
        return false;
      }
    }
</script>
<style>
.signin {
  border: 1px solid #c6c7cc;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 440px;
  margin-left: 34%;
margin-right:24%;
}
</style>
</head>
<body>
<?php

include 'nvgbar.php';

?>
<br><br>
<div class="formstyle">
<h1>Sign In!<span>Sign In and start posting!!</span></h1>
</div>
<div style="background-image:url('images/team.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:100%;">

  <form method="post" action="signinpost.php" class="signin" name="myForm" onsubmit="return validatePost();">
  <fieldset class="account-info">
    <label>
      Username
      <input type="text" name="username">
    </label>
    <label>
      Password
      <input type="password" name="password">
    </label>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="SignIn">
  </fieldset>
</form>
</div>
<br><br>
<?php

include 'footer.php';

?>
</body>
</html>