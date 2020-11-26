<?php

    $message="";
    if(count($_POST)>0){
        $conn=mysqli_connect("localhost","root","","records");
        $result = mysqli_query($conn,"SELECT * FROM students WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $count= mysqli_num_rows($result);
        if($count==0){
            $message="invalid email or password";

        }else{
            echo "connected succesfully";
           header("location:details.php");
        }
    }


?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <a href="index.html">register</a> 
       <a href="login.php">login</a> 
            <div class="message"><?php if($message!="") { echo $message; } ?></div></br>
            <p>Please enter your details</p>
                <form method="post" action="" name="myform">
                
                    <label for="email">email
                        <input type="text" name="email" required>
                    </label>
                    <label for="password">password
                        <input type="password" name="password" required>
                    </label>
                    <input type="submit" id="submit">
                </form> 
    </div>
</body>
</html>