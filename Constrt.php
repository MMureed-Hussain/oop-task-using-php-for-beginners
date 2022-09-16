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
    $this->name = $name;
    $this->post = $post;
  }
  function get_name() {
    return $this->name; 
  }
  function get_post() {
    return $this->post; 
  }
}
class Dep{
    public $type;
 
     function __construct($type){
        $this->type = $type;
     }
     function get_type(){
        return $this->type;
     }
}
$dep = new Dep("Web");
echo " *****Department Name *****  ". $dep->get_type();
echo "<br>";
$employee = new Employee("Devloper" , " Hussain");
echo " Post :- " . $employee->get_post();
echo "<br>";
echo " Name :- " . $employee->get_name();
echo "<br>";

$dept = new Dep("Mobile");
echo " *######* Department Name *######* " . $dept->get_type();
echo "<br>";
$employe = new Employee(" Developer" , "Ali");
echo " Post :- " .$employe->get_post();
echo "<br>";
echo " Name :- " . $employe->get_name();
?>
</body>
</html>
