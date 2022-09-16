<!DOCTYPE html>
<html>
<body>

<?php
class Employee {
  // Properties
  public $name;
  public $post;

  // Methods
  function __construct($post,$name) {
    $this->post = $post;
    $this->name = $name;
  }
  function __destruct(){
    echo "Post :- {$this->post} <br>  Name :- {$this->name} <br>";
  }
}
class Dep{
    public $type;
 
     function __construct($type){
        $this->type = $type;
     }
     function __destruct(){
        echo "Department Name:{$this->type} <br><br>";
     }
}
echo "<br>************** Well Come Employee Managment System***************<br>";
$dep = new Dep("Web");
echo "<br>";
$employee = new Employee("Devloper" , " Hussain");
$dept = new Dep("Mobile");
echo "<br>";
$employe = new Employee(" Developer" , "Ali");

?>
</body>
</html>
