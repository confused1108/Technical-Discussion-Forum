<html>
<head>
<title>Give your feedback</title>
<style>
.bc {
  border: 1px solid #c6c7cc;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 640px;
  margin-left: 28%;
margin-right:24%;
}
</style>
</head>
<link rel="stylesheet" type="text/css" href="css/posts.css">
<script>
 function validatePost() {
   var y = document.forms["myForm"]["feedback_mail"].value;   
    if(y=="")
    {
      alert("Enter email");
      return false;
    }
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {         
        alert("Not a valid e-mail address");
        return false;
    }
    var q = document.forms["myForm"]["feedback_descr"].value;
      if(q == "")
      {
        alert("please enter your feedback");
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
<h1>Give your Feedback !!</h1>
</center>
</div>
<div style="background-image:url('images/team.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:65%;">

  <form method="post" action="feedbackpost.php" name="myForm" onsubmit="return validatePost()" class="bc">
  <fieldset class="account-info">
  <label>
      Email
      <input type="text" name="feedback_mail" width="40%">
    </label>
    
    <label>
    Feedback
      
    </label>
    <textarea rows="12" cols="60" name="feedback_descr" class="textarea">
</textarea>

  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Submit" >
  </fieldset>
</form>
</div>
<br>
<?php

include 'footer.php';

?>
</body>
</html>