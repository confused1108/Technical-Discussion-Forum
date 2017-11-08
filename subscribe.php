<html>
<head>
<title> Subscribe </title>
</head>
<body>

<?php
 if(isset($_POST['subscribe_mail']))
 {
 	$email=$_POST['subscribe_mail'];
 	$db=new PDO("mysql:host=localhost;dbname=techon","root","");
       if($db)
       {
       	
            $sql = "INSERT INTO 
                        subscribe(subscribe_mail)
                    VALUES(?)";
             $test=$db->prepare($sql);
              $test->bindParam(1,$email);
                    if($test->execute())
                    {
                    	header("location:index.php");
                    }
                    else
                    {
                    	echo "error";
                    }
       }
       else 
       echo "error";
}
else
echo "error";

?>
</body>
</html>


