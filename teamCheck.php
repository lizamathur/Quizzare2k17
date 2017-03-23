<?php
  $host='localhost';
  $user='root';
  $pass='';
  $db='quizz';
  $connect=mysqli_connect($host,$user,$pass,$db);
  //if($connect)
  //echo "Successfully connected";
  $team=$_POST['team'];
  //echo "$team";
  $teamcheck="SELECT COUNT(*) as count FROM table1 WHERE table1.team='$team'";
  $result=mysqli_query($connect,$teamcheck);
  if( $result->fetch_object()->count>0) {
    echo "fail";
  }
    mysqli_close($connect);
 ?>
