<?php
echo "Here in register.php";
  $host='localhost';
  $user='root';
  $pass='';
  $db='quizz';
  //$posted=null;
  $have=2;
  $allow1=1;
  $allow2=1;
  $allow3=1;
  $allowed=0;
  $connect=mysqli_connect($host,$user,$pass,$db);
  //if($connect)
  //echo "Successfully connected";
  $team=($_POST['team']);
  $teamcheck="SELECT COUNT(*) as count FROM table1 WHERE table1.team='$team'";
  $result=mysqli_query($connect,$teamcheck);
  if( $result->fetch_object()->count>0) {

   echo '<script type="text/javascript">';
  echo ' swal("Team Name already exists");';
  echo ' </script>';
}
  else {
      $name=array();
      for($i=0;$i<3;$i++)
        $name[]=($_POST['name'.$i]);
      for($i=0;$i<3;$i++)
        $dept[]=($_POST['dept'.$i]);
      for($i=0;$i<3;$i++)
          $year[]=($_POST['year'.$i]);
      for($i=0;$i<3;$i++)
          $roll[]=($_POST['roll'.$i]);

      for($x = 0; $x < $arrlength; $x++) {
      echo $name[$x];
  /*    $name1=($_POST['name1']);
      $dept1=($_POST['dept1']);
      $year1=($_POST['year1']);
      $roll1=($_POST['roll1']);
      $name2=($_POST['name2']);
      $dept2=($_POST['dept2']);
      $year2=($_POST['year2']);
      $roll2=($_POST['roll2']);
      $name3=($_POST['name3']);
      $dept3=($_POST['dept3']);
      $year3=($_POST['year3']);
      $roll3=($_POST['roll3']);
      /*if(empty($team)||empty($name1)||empty($name2)||empty($name3)||empty($dept1)||empty($dept2)||empty($dept3)||empty($roll1)||empty($roll2)||empty($roll3)){
        echo "Fields are empty";
      }
      else
      {
        //echo "here";
          */
        //  echo "$teamcheck";
          //$query2=mysqli_query($connect,$teamcheck);
          //echo "$query2";


          //echo("Count"mysql_num_rows($result));
      /*    if( $result->fetch_object()->count>0)
          {
            //echo "Team exists. Team not created!";
            //$posted=true;
            $have=0;
          }*/
            $memcheck1="SELECT COUNT(*) as cc1 FROM table1 WHERE table1.name1='$name1' and table1.dept1='$dept1' and table1.year1='$year1' and table1.roll1='$roll1'";
            $memcheck2="SELECT COUNT(*) as cc2 FROM table1 WHERE table1.name2='$name2' and table1.dept2='$dept2' and table1.year2='$year2' and table1.roll2='$roll2'";
            $memcheck3="SELECT COUNT(*) as cc3 FROM table1 WHERE table1.name3='$name3' and table1.dept3='$dept3' and table1.year3='$year3' and table1.roll3='$roll3'";

                $mem1=mysqli_query($connect,$memcheck1);
                $mem2=mysqli_query($connect,$memcheck2);
                $mem3=mysqli_query($connect,$memcheck3);
                if( $mem1->fetch_object()->cc1>0)
                {
                    $allow1=0;
                }
                if( $mem2->fetch_object()->cc2>0)
                {
                    $allow2=0;
                }
                if( $mem3->fetch_object()->cc3>0)
                {
                    $allow3=0;
                }
                if($allow1!=0 && $allow2!=0 && $allow3!=0)
                {
                    $allowed=1;
                  $ins="INSERT INTO table1(team,name1,dept1,year1,roll1,name2,dept2,year2,roll2,name3,dept3,year3,roll3)VALUES('$team','$name1','$dept1','$year1','$roll1','$name2','$dept2','$year2','$roll2','$name3','$dept3','$year3','$roll3')";
                  $query1=mysqli_query($connect,$ins);
                  $have=1;
                }

       }

    mysqli_close($connect);
 ?>
