<html>
<head>
<title>Post submitted</title>
</head>

<body>

<?php


//$_SESSION['signed_in'] = true;
include 'nvgbar.php';
include 'connect.php';
echo "<br><br>";

if(isset($_SESSION['signed_in'])==true)
{
    //the user is signed in
        $query  = "BEGIN WORK;";
        $result = mysql_query($query);
         
        if(!$result)
        {
          
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
          $cat=$_POST['topic_cat'];
          $subject=$_POST['topic_subject'];
          $descr=$_POST['topic_descr'];
          $id=$_SESSION['id'];
       $db=new PDO("mysql:host=localhost;dbname=techon","root","");

      if($db)
      {
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_descr,
                               topic_date,
                               topic_cat,
                               topic_by)
                    VALUES(?,?,?,?,?)";
             $test=$db->prepare($sql);
             $test->bindParam(1,$subject);
             $test->bindParam(2,$descr);
             $test->bindParam(3,date('y/m/d'));
             $test->bindParam(4,$cat);
             $test->bindParam(5,$id);
            if($test->execute())
            {
               $query='select * from topics order by topic_id DESC;';
               $stm=$db->prepare($query);
               $stm->execute();
               $res=$stm->fetchAll(PDO::FETCH_OBJ);
               $topicid= $res[0]->topic_id;
               


                     header("location:topic.php?posts_topic=$topicid");
            }
            else
            {
              echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
            }
         }
         else
         {
           echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
         }             
         }  
   }
    else
    {
    	echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You need to sign in first</p>";
                     echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signin.php">Sign In </a></p>';

      //echo 'You need to sign in first';
    }

echo "<br><br><br><br>";
include 'footer.php';

?>

</body>
</html>