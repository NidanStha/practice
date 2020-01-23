<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="continue";
  $con = mysqli_connect($host,$user,$pass,$db);
  $uur = $_SERVER['PHP_SELF'];
?>
<form action="yee.php" method="get">
  <input type="text" name="inum" id="">
  <input type="submit" name="submit" value="submit">
</form>
<?php
  if (isset($_GET['submit'])) {
    echo $uur;
    $iname=$_GET['inum'];

    $qur="DELETE from tb_con where SN=$iname";
    $result=mysqli_query($con,$qur);
    if($result) {
      echo 'done';
      header('refresh:0, url='.$uur);
    }else{
      echo 'not';
    }

    mysqli_close($con);
  }
?>
