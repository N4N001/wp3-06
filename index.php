<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zvirata</title>
</head>
<body>
<?php
    include_once "pes.php";
    include_once "kočka.php";
   $pes = new pes("Pes", 3);
   $pes->pozdrav();


echo"<br>";


   $kočka = new kočka("Kočka", 10);
   $kočka->pozdrav();
 
   ?>

     <br>

     <br>


               <?php
            class kote {
            public $name;
            public $age;
            public function __construct($name, $age) {
               $this->name = $name;
               $this->age = $age;
            }
            public function intro() {
               echo "Tohle, je {$this->name} a je jí {$this->age} roku.";
            }
            }

            class cat extends kote{
            public function message() {
               echo "Malé kotě Mourek, ";
            }
            }
            $cat = new cat("Mourek", "2");
            $cat->message();
            $cat->intro();
            ?>
</body>
</html>
