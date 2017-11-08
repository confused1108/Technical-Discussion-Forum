<html>
<head>
<title>Reply</title>

<style>
.formstyle h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    text-align: center;
}
.formstyle h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
<?php
include 'nvgbar.php'; 
?>
<br><br>
<div class="formstyle">
<center>
<h1>Welcome to TechOn.com<span></span></h1>
</center>
</div>

<?php
//session_start();
//$reply=$_POST['reply'];
$topicid=$_GET['id1'];
include 'connect.php';
if(isset($_SESSION['signed_in']) == true)
{
	$content=$_POST['reply'];
  $id=$_SESSION['id'];
   $db=new PDO("mysql:host=localhost;dbname=techon","root","");
        if($db)
        {
          $sql = "INSERT INTO
                            posts(posts_content,
                                  posts_date,
                                  posts_topic,
                                  posts_by)
                        VALUES(?,?,?,?)";
          $test=$db->prepare($sql);
             $test->bindParam(1,$content);
             $test->bindParam(2,date('y/m/d'));
             $test->bindParam(3,$topicid);
             $test->bindParam(4,$id);
             if($test->execute())
              header("location:topic.php?posts_topic=$topicid");
              else
                echo 'An error occured while inserting your reply. Please try again later.' . mysql_error(); 

        }
        else
        {
           echo 'An error occured while inserting your reply. Please try again later.' . mysql_error();
        }

  
}

else
{
echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You need to sign in first</p>";
                     echo '<br><p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signin.php">Sign In </a></p>';

}
echo "<br><br><br><br><br><br><br><br><br><br>";
      include 'footer.php';
?>

</body>
</html>