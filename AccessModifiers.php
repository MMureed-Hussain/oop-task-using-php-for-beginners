<!DOCTYPE html>
<html>
<body>

<?php
class Employee {
  public $name;
  private $post;
  protected $type;
}

$emp = new Employee();
$emp->set_name('Ali'); // OK
$emp->set_post('Web'); // ERROR
$emp->set_type('Developer'); // ERROR
?>
</body>
</html>
