<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title>PHP practice</title>
  </head>
  <body>
    <div class="session1">
      <form class="" action="index.php" method="post" autocomplete="off">
        <label for="num_value">Number: </label>
        <input type="text" id="num_value" name="mult" value="" required/>
        <input type="submit" name="submit" value="submit"><br>
        <?php calcu(); ?>
      </form>
    </div>
  </body>
</html>

<?php
  function calcu(){
    if(isset($_POST['mult'])){
      $mult = (int)$_POST['mult'];
      for($i=1;$i<=10;$i++){
        echo $mult . '*' . $i . '=' . $mult*$i . "<br/>";
      }
    }
  }
?>
