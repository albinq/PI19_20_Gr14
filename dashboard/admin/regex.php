<!DOCTYPE html>
<html>

<body>

  <?php
  $str = "Ky eshte nje tekst";
  echo "<b>Explode: </b>";
  print_r(explode(" ", $str));
  echo "<br>";
  $arr = array('Ky', 'Eshte', 'Nje', 'Tekst');
  sort($arr);
  echo "<b>Sortimi: </b>";

  print_r($arr);
  echo "<br><b>Implode: </b>";
  echo implode(" ", $arr);
  $str = "Ky eshte nje tekst";
  echo "<br>";

  echo $str . "<br>";
  echo "<b>Trim: </b>";

  echo trim($str, "Ky");
  echo "<br>";

  $number = 2;
  $str = "Kosova";
  echo "<b>Printf : </b>";

  printf("There are %u million people in %s.", $number, $str);
  echo "<br>";
  echo "<b>substr: </b>";

  echo substr("Hello world", 6);
  echo "<br>";
  echo "<b>strlen: </b>";

  echo strlen("Hello");
  echo "<br>";
  echo "<b>str_replace: </b>";

  echo str_replace("world", "Peter", "Hello world!");
  echo "<br>";

  $str = 'string';
  $chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
  echo "<b>preg_split: </b>";

  print_r($chars);
  echo "<br>";



  $gfg = "GFG is the best Platform.";
  echo "<b>preg_match: </b>";

  if (preg_match("/\bGFG\b/i", $gfg, $match))
    echo "Matched! <br>";
  else
    echo "not matched <br>";

  $strings = 'The quick brown fox jumps over the lazy dog.';
  $patterns = array();
  $patterns[0] = '/quick/';
  $patterns[1] = '/brown/';
  $patterns[2] = '/fox/';
  $replacements = array();
  $replacements[2] = 'bear';
  $replacements[1] = 'black';
  $replacements[0] = 'slow';
  echo "<b>preg_replace: </b>";

  echo preg_replace($patterns, $replacements, $strings);
  echo "<br>";





  echo "<b>Class, Object, Constructor, Destructor, Trashigemi: </b><br>";


  class Fruits
  {
    public $name;
    public $color;
    public function __construct($name, $color)
    {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct()
    {
      
      echo "The fruit is {$this->name}.";
      echo "<br>";
    }
    public function intro()
    {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
      echo "<br>";
    }
  }

 

  class Strawberry extends Fruits
  {
    public function message()
    {
      echo "Am I a fruit or a berry? ";
      echo "<br>";
    }
  }

  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();








  class Person
  {
    private $name;
    public function setName($name)
    {
      $this->name = $name;
    }
    public function getName()
    {
      return 'welcome' . $this->name;
echo "<br>";

    }
  }
  $person = new Person();
  $person->setName('Alex');
  $name = $person->getName();
  echo $name;






  echo "<br><b>Cookies: </b><br>";
  $cookie_name = "user";
  $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  ?>
  <html>

  <body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
echo "<br>";

    } else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      
      echo "Value is: " . $_COOKIE[$cookie_name];
echo "<br>";

    }


    ?>


    <script>
      function showHint(str) {
        if (str.length == 0) {
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          }
          xmlhttp.open("GET", "gethint.php?q=" + str, true);
          xmlhttp.send();
        }
      }
    </script>
    </head>

    <body>

      

      <?php

      setcookie("user", "", time() - 3600);
      ?>



      <?php
      echo "Cookie 'user' is deleted.";
echo "<br>";

      ?>

<p><b>Start typing a name in the input field below:</b></p>
      <form action="">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
      </form>
      <p>Suggestions: <span id="txtHint"></span></p>

      <?php
      $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
      $txt = "John Doe\n";
      fwrite($myfile, $txt);
      $txt = "Jane Doe\n";
      fwrite($myfile, $txt);
      fclose($myfile);
      ?>

      <?php
      $myfiles = fopen("newfile.txt", "r") or die("Unable to open file!");
      echo fread($myfiles, filesize("newfile.txt"));
echo "<br>";
      
      fclose($myfiles);
      ?>

    </body>

  </html>