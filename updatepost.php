<html>
<head>
    <title>techon-technical discussion forum</title>
    <link rel="stylesheet" type="text/css" href="css/update.css">
</head>

<body>

<?php

include 'nvgbar.php';

?>
<br><br>
<div class="formstyle">
    <div style="text-align: center;">
        <h1>Update Profile !!<span>It is completely free and will take less then 30 Seconds!!</span></h1>
    </div>
</div>

<?php
include "connect.php";

$errors = array();
$username=$_POST['username'];
$id1=$_SESSION['id'];
$sql1=mysqli_query($connection,"SELECT username FROM users WHERE id='$id1'");
$row=mysqli_fetch_array($sql1);
$username1=$row['username'];
if(isset($username))
{
    $sql=mysqli_query($connection,"SELECT username FROM users WHERE username='$username'");
    if($sql)
    {
        $num_rows=mysqli_num_rows($sql);
    }


    if($num_rows >0 && ($username != $username1))
    {
        $errors[] = 'This username already exist.';
    }

    if(!ctype_alnum($_POST['username']))
    {
        $errors[] = 'The username can only contain letters and digits.';
    }
    if(strlen($_POST['username']) > 10)
    {
        $errors[] = 'The username cannot be longer than 10 characters.';
    }
}
else
{
    $errors[] = 'The username field must not be empty.';
}

if(!empty($errors))
{
    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have a problem while signing up..</p>";
    foreach($errors as $key => $value)
    {
        echo '<p style="text-align:center; font-size:19px; font-weight:bold; color:red;">' . $value . '</p>';
    }
    echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signup.php">Sign Up again</a></p>';
}
else
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $id=$_SESSION['id'];
    $db=new PDO("mysql:host=localhost;dbname=techon","root","");
    if($db)
    {
        $sql = "UPDATE users 
            SET name = :name, 
            username = :username, 
            email = :email,  
            contact = :contact  
            WHERE id = :id";
        $test = $db->prepare($sql);
        $test->bindValue(':name', $name, PDO::PARAM_STR);
        $test->bindValue(':username', $username, PDO::PARAM_STR);
        $test->bindValue(':email', $email, PDO::PARAM_STR);
        $test->bindValue(':contact', $contact, PDO::PARAM_STR);
        $test->bindValue(':id', $id, PDO::PARAM_STR);
        if($test->execute())
            header("location: profile.php");
        else
            echo 'Something went wrong while registering. Please try again later.1 ';
        print_r($test->errorInfo());
    }
    else
    {
        echo 'Something went wrong while registering. Please try again later.2';

    }

}
?>
<br><br>
<?php

include 'footer.php';

?>
</body>
</html>

