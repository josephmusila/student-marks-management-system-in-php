<?php
    $id=$_POST['id'];

    $host="localhost";
    $user="root";
    $pass="";
    $dbname="records";

    $conn=mysqli_connect($host,$user,$pass,$dbname);

    if(!$conn){
        die('could not connect: ' . mysqli_connect_error());

    }
    echo "connected succesfully <br>";
   $sql='SELECT * FROM marks WHERE id=6757';
   $retrieval =mysqli_query($conn,$sql);

   if(mysqli_num_rows($retrieval)>0){
       while($row=mysqli_fetch_assoc($retrieval)){
           echo "id:{$row['id']} ";
            echo  "maths:{$row['maths']}  ";
            echo  "english:{$row['english']}  ";
            echo  "kiswahili :{$row['kiswahili']}   ";
            echo  "average :{$row['average']}  ";
            echo  "grade :{$row['grade']}<br>";
       }
    }else{
       echo "0 results";
   }
    
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
    <div class="container">

   
       <a href="index.html">register</a> 
       <a href="login.php">login</a> 
    </div>
</body>
</html>