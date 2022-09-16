<!DOCTYPE html>
<html>
<body>

<?php
class Employee {
  public $name;
  private $post;
  protected $type;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_type($n) { // a protected function
    $this->type = $n;
  }
  private function set_post($n) { // a private function
    $this->post = $n;
  }
}

$emp = new Employee();
$emp->set_name('Ali'); // OK
$emp->set_post('Web'); // ERROR
$emp->set_type('Developer'); // ERROR
?>
</body>
</html>
