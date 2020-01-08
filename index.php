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
    </div>

    <div class="session2">
      <!--<form action="index.php" method="post">
        ball: <input type="checkbox" name="numb[]" value="apple" id="">
        bat: <input type="checkbox" name="numb[]" value="ball" id="">
        field: <input type="checkbox" name="numb[]" value="cat" id="">
        <input type="submit" value="submit">
      </form>-->
        <?php
          $friends = array('ram','empty' , 'shyam','full');
          foreach ($friends as $frnd) {
            echo $frnd."<br />";
          }
        ?>
    </div>
  </body>
</html>
