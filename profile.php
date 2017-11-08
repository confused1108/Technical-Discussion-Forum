<!DOCTYPE html>
<html>

<head>

<title>
profile
</title>

<head>




<body>

<?php
include 'connect.php';
include 'nvgbar.php';
$id=$_SESSION['id'];
$query = mysqli_query($connection,"SELECT * FROM users WHERE id='$id'");
while($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $contact = $row['contact'];
    $gender=$row['gender'];
	}

?>

<div style="background-image:url('images/profile.jpg'); border-radius:6px; width:100%; height:600px;">
<div style="color: rgb(255, 255, 255)">


<img src="images/usericon.png" style="border-radius: 50%;width:200px;margin-left: 100px;margin-top: 120px">

<p><span style="font-size: 30px;font-family: verdana"></span>
<span style="font-size: 25px;font-weight: bold;margin-left: 110px;margin-top: 120px;font-weight: bolder;font-family: verdana"><?php echo $name; ?>
</span><br>

</p>



<p style="float:right;margin-right: 475px;margin-top: -230px">

<span style="font-size: 30px;font-family: verdana">Username:</span>
<span  style="font-size: 25px; margin-left:25px;"> <?php echo $username; ?> </span><br>

<span style="font-size: 30px;font-family: verdana">Contact No.:</span>
<span style="font-size: 25px; "><?php echo $contact; ?></span><br>

<span style="font-size: 30px;font-family: verdana">Email:</span>
<span style="font-size: 25px; margin-left:95px;"><?php echo $email; ?></span><br>

<span style="font-size: 30px;font-family: verdana">Gender:</span>
<span style="font-size: 25px; margin-left:71px;"><?php echo $gender; ?></span><br></p>

</div>
</div>
<br><br><br><br>
<p style="text-align:center;color:blue;font-size:35px;margin-top:-30px" >Discussions You have started....</p>
<?php
include 'connect.php';
	$id=$_SESSION['id'];

$query=mysql_query("SELECT * FROM topics WHERE topic_by='$id' ORDER BY topic_id DESC");
while($row = mysql_fetch_assoc($query))
{

  $topic=$row['topic_subject'];
  $id1=$row['topic_id'];
   echo "<br><p ><a href='topic.php?posts_topic=$id1'  style='text-decoration:none; color:black; font-size:25px; font-weight:bold; margin-left: 20px; '>&nbsp&nbsp&nbsp
   ".$topic." </a></p><br>";
}
?>

<?php include 'footer.php'; ?>
</body>
</html>

