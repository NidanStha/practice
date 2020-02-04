<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title>PHP practice</title>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <div class="session1" id="session1">
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

    <div class="session2" id="session2">
      <h5>Array and foreach</h5>
        <?php
          $friends = array('ram','empty','shyam','full');
          foreach ($friends as $frnd) {
            echo $frnd."<br />";
          }
        ?>
    </div>

    <div class="session3"  id="session3">
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

    <div class="session4"  id="session4">
      <h5>Class and Object</h5>
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

    <div class="session5" id="session5">
      <h5>database</h5>
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
          mysqli_close($con);
        }
      ?>
    </div>
    <div class="session6">
      <h5>Loop logic</h5>
      <table border="2px">
        <?php
          $a=1;
          for($k=1;$k<=10;$k++){
            echo '<tr>';
            for($i=1;$i<=10;$i++){
              echo '<td>' . $a*$i . '</td>';
            }
            ++$a;
            echo '</tr>';
          }
        ?>
      </table>
    </div>
    <div class="session7">
      <h5>radio, checkbox and select</h5>
      <form action="index.php" method="post">
        <label for="rrd">Gender:</label>
        Female: <input type="radio" name="gn" id="rrd" value="femalee" />Male: <input type="radio" name="gn" id="rrd" value="malee"/><br>
        Hobby: <input type="checkbox" name="hobby[]" id="" value="ball">
        <input type="checkbox" name="hobby[]" id="" value="bat">
        <input type="checkbox" name="hobby[]" id="" value="cat"><br>
        <select name="con" id="">
          <option value="nepal">Nepal</option>
          <option value="china">China</option>
          <option value="india">India</option>
        </select>
        <br><input type="submit" value="subm" name="subm">
      </form>
      <?php
        if ($_POST['subm']) {
          $ggn=$_POST['gn'];
          $hobby=$_POST['hobby'];
          $con=strtoupper($_POST['con']);
          echo '<br />' . $ggn;
          foreach ($hobby as $hob) {
            echo '<br />' . $hob;
          }
          echo '<br />' . $con;
        }
      ?>
    </div>
  </body>
</html>
