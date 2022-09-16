<!DOCTYPE html>
<html>
<body>

<?php
// Interface definition
interface Employee {
  public function workingArea();
}

// Class definitions
class Management implements Employee {
  public function workingArea() {
    echo "    Hr <br>";
  }
}

class Type implements Employee {
  public function workingArea() {
    echo " Web Developer <br>";
  }
}

class Heads implements Employee {
  public function workingArea() {
    echo " CEOs <br> ";
  }
}

// Create a list of Employees
$m = new Management();
$t = new Type();
$h = new Heads();
$employees = array($h,$m, $t);
echo "<br>************** Well Come Employee Managment System***************<br>";
// Tell the Employees working areas
foreach($employees as $employees) {
  $employees->workingArea();
}
?>
 
</body>
</html>
