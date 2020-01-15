<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title>PHP practice</title>
  </head>
  <body>
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

    /*
        //extra example
        class Fruit {
          // Properties
          public $name;
          public $color;

          // Methods
          function set_name($name) {
            $this->name = $name;
          }
          function get_name() {
            echo $this->name;
          }
        }
        $fru=new Fruit();
        $fru->set_name("nidan");
        $fru->get_name();
        */
      ?>
    </div>
  </body>
</html>
