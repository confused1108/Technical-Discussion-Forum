<html>
<head>
<title>Write a post</title>
</head>
<link rel="stylesheet" type="text/css" href="css/posts.css">
<script>
   function validatePost() {
    var x = document.forms["myPost"]["topic_subject"].value;
    if (x == "") 
        {
        alert("title is required");
        return false;
      }
      var y = document.forms["myPost"]["topic_descr"].value;
    if (y == "") 
        {
        alert("Please write a Description");
        return false;
      }
    }
</script>
<style>

.post {
  border: 1px solid #c6c7cc;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 640px;
  margin-left: 28%;
margin-right:24%;
}

</style>
<body>
<?php

include 'nvgbar.php';

?>

<br><br>
<div class="formstyle">
<center>
<h1>Start a Discussion</h1>
</center>
</div>
<div style="background-image:url('images/team.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:100%;">
 
  <form method="post" action="postspost.php" name="myPost" onsubmit="return validatePost()" class="post">
  <fieldset class="account-info">
  <label>
      Title
      <input type="text" name="topic_subject" class="sub">
    </label>
    
        <label>
    Category<br><br>
    <select name="topic_cat">
    <option value="web">Web Development</Option>
    <option value="android">Android Development</Option>
    <option value="computer">Computer Technology</Option>
    <option value="others">Others</Option>
  </select>
    </label>
    <label>
    Description
    </label>
       <textarea rows="18" cols="60" name="topic_descr" class="textarea">
</textarea>
    

   

  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Post" >
  </fieldset>
</form>
<br>
</div>
<?php

include 'footer.php';

?>
</body>
</html>

<div class="conainer" style="background-color:black;color:white">

    <div class="row">

        <div class="col-md-6" >
            <p style="margin-left: 37px;margin-top:-20px;font-size: 20px">See other Workplaces</p>
            <form method="post" action="seework.php">
                <div class="form-group" style="padding-left:10px;padding-right:10px;" >

                    <select name="work">
                        <option value="org_load">Workload</Option>
                        <option value="org_env">Working environment</Option>
                        <option value="org_stf">Satisfaction</Option>
                        <option value="org_rcmd">Recommendation</Option>
                    </select>

                </div>

                <button style="margin-left:10px" type="submit" class="btn btn-success">Submit</button>

            </form>

        </div>
        <div class="col-md-6" >
        </div>
    </div>
</div>