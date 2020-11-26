

<?php

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$message=" ";

if(!empty($name) || !empty($email) || !empty($password))
{
    $conn=mysqli_connect("localhost","root","","records");

    $query="INSERT INTO `students` (`id`,`name`, `email`, `password`)VALUES('$id','$name','$email','$password')";
    mysqli_query($conn,$query);
    if(mysqli_connect_errno()){
        echo "failed to connect to msqli: " . mysqli_connect_errno();
        exit();
    }
    
}
else{
    echo "all fields must be filled";
    die();
}

$message="Hello  $name  You have succesfully registered "


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
  <div class="container sucess-register">
  <a href="index.html">register</a> 
       <a href="login.php">login</a> 
      <a href="login.php" id="ref">login</a>
     <div>
     <?php
      if($message!=""){
          echo $message;
      }
      
      ?>
     </div>

      
  </div>
</body>
</html>