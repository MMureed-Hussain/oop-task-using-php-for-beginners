<!DOCTYPE html>
<html>
<body>

<?php
class Employee {
  // Properties
  public $name;
  public $post;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name; 
  }
  function set_post($post){
    $this->post = $post;
  }
  function get_post(){
    return $this->post;
  }
}

$emp = new Employee();
$emp->set_name('Hussain');
$emp->set_post('Developer');

echo "Name of Employee : \r". $emp->get_name();
 echo "<br>";
echo 'Post of Employee : ' . $emp->get_post();
echo "<br>";
var_dump ($emp instanceof Frut);

?>
</body>
</html>
