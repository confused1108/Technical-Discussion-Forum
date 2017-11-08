<html>
<head>
<title>Welcome to Computer Techology</title>
<link rel="stylesheet" type="text/css" href="../css/category.css">
<style>
.divigr:hover{
	background-color:#e6f2ff;
	width:60%;
	transition-duration: 0.4s;
	margin-left:25px;
}
.divigr
{
	margin-left:15px;
	width:60%;
}
</style>
</head>

<body>
<?php

include 'nvgbar2.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1>Computer Tecnology<span>Dive into the sea of Computer Technology !!</span></h1>
</center>
</div>
<div class="maimage">
<img src="../images/comp_home.jpg" alt="Computer Technology" width="100%" height="340px">
<br>
<br>
<div class="description">
computer technology is the activity of designing and constructing and programming computers. Computer technology directly correlates with information technology.<br> Computer technology encompasses a developing list of different software programs and devices.
</div>
<div>
<center>
<p style="color:White; font-size:300%; font-family:verdana; background-color:powderblue;">Latest Discussions</p>
</center>
</div>
<?php
include "../connect.php";
//echo "<p>Latest Discussion<p>";
$cat='computer';
 $query = mysql_query("SELECT * FROM topics WHERE topic_cat='$cat' ORDER BY topic_date DESC LIMIT 3");
//$result = mysql_query($query);
//$numrows = mysql_num_rows($sql);

if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysql_fetch_assoc($query))
	{
		$by=$row['topic_by'];
		$date=$row['topic_date'];
		$sub=$row['topic_subject'];
		$id=$row['topic_id'];
		echo "<div style:'width:60%;' class='divigr'>";
		echo "<h1><a href='../topic.php?posts_topic=$id' style='color:black; text-decoration:none;'>$sub</a></h1><br>";
		$query2 = mysql_query("SELECT username FROM users WHERE id='$by'");
		while($row2 = mysql_fetch_assoc($query2))
		{
			$name=$row2['username'];
			echo "<h3>Asked by: $name</h3><h3>On ";
			echo date('d-m-Y', strtotime($date));
			echo "</h3><br>";
		}
		echo "</div>";
		echo "<hr style='width:60%; float:left;'><br>";
		//echo "<br><br><br><br><br>";
		
	}
}
echo "<br><br><br>";


?>


</body>
<?php

include 'footer.php';

?>
</html>