<?php
$id=$_POST['id'];
$maths=$_POST['maths'];
$english=$_POST['english'];
$kiswahili=$_POST['kiswahili'];

$message="";

if(!empty($maths) || !empty($english) || !empty($kiswahili)){
    $conn=mysqli_connect("localhost", "root", "", "records");

    $total=$maths+$kiswahili + $english;
    $average=($total)/3;

    $grade="";

    if($average<40){
        $grade="E";
    }
    else if($average>40 && $average<55){
        $grade="D";
    }
    else if($average>55 && $average<65){
        $grade="C";
    }
    else if($average>65 && $average<75){
        $grade="B";
    }
    else{
        $grade="A";
    }

    $query="INSERT  INTO `marks`(`id`,`maths`, `english`, `kiswahili`,`total`,`average`,`grade`) VALUES ('$id','$maths','$english','$kiswahili','$total','$average','$grade')";
    
    

    mysqli_query($conn,$query);

    header("location:marks.html");
    $message="sucess";

    if(mysqli_connect_errno()){
        echo "falide to connect " . mysqli_connect_errno();
    }
}else{
    echo "all fields must be filled";
    die();
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
  <div class="container sucess-register">
      
     <div>
     <a href="index.html">register</a> 
       <a href="login.php">login</a> 
     <?php
    
          echo $message;
      
      
      ?>
     </div>

      
  </div>
</body>
</html>
