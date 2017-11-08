<html>
<head>
<title>Feedback submitted</title>
</head>

<body>

<?php
include 'nvgbar.php';
include 'connect.php';
echo "<br><br>";
       
       $mail=$_POST['feedback_mail'];
       $descr=$_POST['feedback_descr'];

       $db=new PDO("mysql:host=localhost;dbname=techon","root","");
       if($db)
       {
            $sql = "INSERT INTO 
                        feedback(feedback_mail,
                               feedback_descr)
                    VALUES(?,?)";


            $test=$db->prepare($sql);
              $test->bindParam(1,$mail);
          $test->bindParam(2,$descr);
                    if($test->execute())
                    {
                        
                     echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>Your Feedback have been received</p>";
                     echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="index.php">TechOn.com </a></p>';
                    }
                 else
                 {
                        echo "error";
  				}
            }
            else
            {
                echo "error";
            }
     
          

echo "<br><br><br><br>";
include 'footer.php';

?>

</body>
</html>