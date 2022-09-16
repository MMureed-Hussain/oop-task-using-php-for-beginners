<!DOCTYPE html>
<html>
<body>

<?php
class Employee {
  // Properties
  public $name;
  public $post;

  // Methods
  public function __construct($post,$name) {
    $this->name = $name;
    $this->post = $post;
  }
  public function Info(){
    echo "The Post :- {$this->post} <br> and Name :- {$this->name} <br>";
  }
} //inheritance with extends key word 
class Department extends Employee {
  
     public function type(){
  echo "I am a web developer in fluxy System ";
     }
      
}
$dept = new Department("Web","Hussain");
$dept->Info();
$dept->type();
?>
</body>
</html>
