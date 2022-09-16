<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name, $greet = "My Dear") {
    if ($name == "Mureed") {
      $prefix = "Mr";
    } elseif ($name == "Hussain") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} *-* {$prefix} {$name}";
  }
}

$cla = new ChildClass;
echo $cla->prefixName("Mureed Hussain");
echo "<br>";  
?>
 
</body>
</html>
