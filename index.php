<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title>PHP practice</title>
  </head>
  <body>
    <nav>
      <ol>
        <a href="#session1">
          <li>Multiplication</li>
        </a>
        <a href="#session2">
          <li>Array and foreach</li>
        </a>
        <a href="#session3">
          <li>Switch case</li>
        </a>
        <a href="#session4">
          <li>Class and Object</li>
        </a>
        <a href="#session5">
          <li></li>
        </a>
      </ol>
    </nav> 

    <div class="session1">
      <h5>Multiplication</h5>
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
      <h5>Array and foreach</h5>
      <!--<form action="index.php" method="post">
        ball: <input type="checkbox" name="numb[]" value="apple" id="">
        bat: <input type="checkbox" name="numb[]" value="ball" id="">
        field: <input type="checkbox" name="numb[]" value="cat" id="">
        <input type="submit" value="submit">
      </form>-->
        <?php
          $friends = array('ram','empty','shyam','full');
          foreach ($friends as $frnd) {
            echo $frnd."<br />";
          }
        ?>
    </div>

    <div class="session3">
      <h5>Switch case</h5>
      <form action="index.php" method="post">
        <input type="text" name="grade" id="">
        <input type="submit" value="submit" >
      </form>
      <?php
        if(isset($_POST["grade"])){
          $grade = $_POST["grade"];
          switch ($grade) {
            case 'A':
              echo "Good";
              break;

            case 'B':
              echo "Normal";
              break;

            case 'C':
              echo "bad";
              break;

            default:
              echo "invalid grade";
              break;
          }
        }
      ?>
    </div>

    <div class="session4">
      <h5>Class and Object</h5>
      <!--<form action="index.php" method="post">
        <input type="text" name="obname" id="">
        <input type="submit" value="submit" id="">
      </form>-->
      <?php
        class book{
          var $bok;
          var $title;
          var $page;

          function __construct($book,$titlee,$pagee){
            $this->bok=$book;
            $this->title=$titlee;
            $this->page=$pagee;
          }

          function display(){
            echo "Book name: $this->bok <br>";
            echo "Title name: $this->title <br>";
            echo "pages: $this->page<br><br>";
          }
        }

        $book1 = new book("programming","php",200);
        $book2 = new book("music","major",300);

        $book1->display();

      ?>
    </div>

    <div class="session6">
      <h5>database</h5>
<!--
      <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="continue";
        $con = mysqli_connect($host,$user,$pass,$db);
      ?>

      <form action="index.php" method="post">
        <label for="nmn">Name: </label><input type="text" name="iname" id="nmn" required autocomplete="off"><br />
        <label for="pho">Phone: </label><input type="text" name="iphone" id="pho" required autocomplete="off"><br />
        <input type="submit" value="submit" name="submit">
      </form>

      <?php
        if (!isset($_POST['submit'])){
          echo 'not clicked';
          mysqli_close($con);
        }else{
          echo 'button clicked' . '<br />';
          $iname = $_POST['iname'];
          $iphone = $_POST['iphone'];
          $qur = "INSERT INTO tb_con (SN,Name,Contact) VALUES('','$iname','$iphone')";

          $result = mysqli_query($con,$qur);

          if ($result) {
            echo "inserted to database";
          }else{
            echo "cannot insert to database";
          }
          echo '<br />' . 'display data of database' . '<br />';
          $query = 'SELECT * from tb_con;';
          $result = mysqli_query($con,$query);
          $resultcheck = mysqli_num_rows($result);
          echo $resultcheck . 'rows in the table.' . '<br />';
          if ($resultcheck > 0) {
            while($row = mysqli_fetch_assoc($result)){
              echo $row['SN'] . ' ' . $row['Name']. ' ' . $row['Contact'] . ' ' . '<br />';
            }
          }
          mysqli_free_result($result);
          mysqli_close($con);
        }
      ?> -->



    </div>
    <div class="session7">
      <!-- <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="continue";
        $con = mysqli_connect($host,$user,$pass,$db);

        $qr = "SELECT * from tb_con";
        $result = mysqli_query($con,$qr);
        $noofro = mysqli_num_rows($result);
        echo '<table>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
              <td>'.
                $row['SN'].'
              </td>
              <td>'.
                $row['Name'].'
              </td>
              <td>'.
                $row['Contact'].'
              </td>
            </tr>';
        }
        echo '</table>';
        echo $noofro;
        mysqli_close($con);

      ?>
      <form action="index.php" method="get">
        <input type="text" name="names" id="">
        <input type="submit" name="submit">
        <?php if (isset($_GET['submit'])) {
          echo 'submitted';
        }else{
          echo ' ';
        } ?>
      </form> -->

      <form action="index.php" method="post">
        <input type="submit" name="submit" value="submit">
      </form>
      <?php
        $uur = $_SERVER['PHP_SELF'];
        $uurl = 'localhost/image' . $uur;
        if (isset($_POST['submit'])) {
          echo $uurl;
          function yoo($yee){
            header("Location:" . $yee);
          }
          yoo('google');
        }
      ?>
    </div>
  </body>
</html>
