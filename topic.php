<html>
<head>
<title>Complete Discussion</title>
<link rel="stylesheet" type="text/css" href="css/topic.css">
<style>
.divigr:hover{
  background-color:#e6f2ff;
  width:51.5%;
  transition-duration: 0.4s;
}
.divigr{
  width:51.5%;
}


button.but
{
  position:fixed;top:300px;right:0px;
  background-color:#4CAF50;
  color: white;
  font-family: verdana;
  font-size: 17px;
  height:45px; 
  width:105px;
  cursor: pointer;
    transition-duration: 0.4s;
    transition:width 2s;
}

button.but:hover
{
  background-color:#2A88AD;
  color:white;
  
  width:200px;
}

</style>
</head>
<body>

<div style="border:1px solid black; width:42%; height:200px; border-radius:10px; position:fixed; top:85px; right:32px; border-width:2px;">
<div style="background-color:#f2f2f2; height: 29px; border-radius:10px 10px 0 0;"><p align="center" style="text-align:center; margin-left:180px; margin-top:3px; font-weight:bold; font-size:25px;">Latest Discussions....</p></div>
<hr style="width:2px;">
<a href="posts.php">
<button type="button" class="but" >POST</button>
</a>
<?php

include 'connect.php';
$query=mysql_query("SELECT * FROM topic ORDER BY topic_id DESC LIMIT 3");
while($row = mysql_fetch_assoc($query))
{
  $topic=$row['topic_subject'];
  $id=$row['topic_id'];
 // echo "<p>$topic</p><br>";
  echo "<p ><a href='topic.php?posts_topic=$id'  style='text-decoration:none; color:black; font-size:22px; font-weight:black; margin-left: 20px; '>
   ".$topic." </a><br><br>";
}

?>
</div>

<?php
include 'connect.php';
include 'nvgbar.php';
$topicid=$_GET['posts_topic'];
$query = mysql_query("SELECT * FROM topic WHERE topic_id='$topicid'");
if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysql_fetch_assoc($query))
	{
		$name=$row['topic_subject'];
    $descr=$row['topic_descr'];
    $date=$row['topic_date'];
    $date2=date('d-m-Y', strtotime($date));
    $cat=$row['topic_cat'];
    $by=$row['topic_by'];
    $query4=mysql_query("SELECT username FROM users WHERE id='$by'");
    $row4= mysql_fetch_assoc($query4);
    $username=$row4['username'];
		echo "<div class='heading' style='background-color:#f2f2f2;
  width:51.5%; margin-left:15px'><h1 style='text-align:left; color:black; font-size: 30px;'> &nbsp&nbsp$name</h1>
  <br>
  <p style='font-size:20px; font-weight:bold;'>&nbsp&nbsp&nbsp $descr</p>
  <br><br>
  <p style='font-size:15px; font-weight:bold;'>&nbsp&nbsp&nbsp &nbspAsked by:</p> <p style='font-size:15px; font-weight:bold; color:blue;'>$username</p>&nbsp&nbsp&nbsp&nbsp <p style='font-size:15px; font-weight:bold;'>On:</p> <p style='font-size:15px; font-weight:bold; color:blue;'>$date2</p>
  <br>
  <p style='font-size:15px; font-weight:bold; font-color:blue;'> &nbsp&nbsp&nbsp&nbsp&nbspin:</p><p style='font-size:15px; font-weight:bold; color:blue;'>$cat</p></div>";
	}
}



/*  <p><?php echo $descr; ?></p>
  <p>Asked by:</p> <p><?php echo $username; ?></p><p>On:</p> <p><?php echo $date; ?></p>
  <p>in:</p><p><?php echo $cat; ?></p>*/

$query2 = mysql_query("SELECT * FROM posts WHERE posts_topic='$topicid' ORDER BY posts_date ASC")
$numrows = mysql_num_rows($query2);
echo "<br><p style='font-size:21px; font-weight:bold; color:black;'>&nbsp&nbsp&nbsp$numrows Replies</p><br><br><br>";
if(!$query2)
{
	echo 'error';
}
else
{
	while($row2= mysql_fetch_assoc($query2))
	{
    echo"<hr style='width:51.5%; float:left; size:2px; margin-left:0px'><br><br>";
		$content=$row2['posts_content'];
		$date=$row2['posts_date'];
		$by=$row2['posts_by'];

		$query3=mysql_query("SELECT username FROM users WHERE id='$by'");
		$row3= mysql_fetch_assoc($query3);
		$name=$row3['username'];

  echo "<div class='divigr'><br><br>";
  echo "<p style='color:blck; font-size:20px; margin-left:15px'> $name<p><br><br>";
		echo "<p style='font-size:20px;font-color:silver; font-weight:bold; margin-left:15px'> $content<p><br><br><p style='font-size:15px; font-weight:bold; margin-left:15px'> replied on:</p> ";
		 echo date('d-m-Y', strtotime($date));
      echo "<br>";
      echo "</div>";
	}
}
?>
<br><br><br>
<p style='font-size:20px; font-weight:bold; color:blue; margin-left:15px;'>Know the answer:</p>
<form method="post" action="reply.php?id1=<?php echo $topicid; ?>" class="woohoo">
  <fieldset class="account-info">
      <label>
    Reply
      
    </label>
    <textarea rows="7" cols="90" name="reply" class="textarea">
</textarea>
<br>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Reply" >
  </fieldset>
</form>
<br><br><br><br><br>

</body>
<?php include 'footer.php'; ?>
</html>