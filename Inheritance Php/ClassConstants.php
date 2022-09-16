<!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting My Profile!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;  //self keyword followed by the scope resolution operator
    // (::) followed by the constant name
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

</body>
</html>