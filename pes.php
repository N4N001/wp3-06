<?php
class pes {
  private $name;
  private $age;
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age; 

  }

  public function pozdrav() {
    echo "Tohle je {$this->name} a je mu {$this->age} let."; 
  }

}
?>
