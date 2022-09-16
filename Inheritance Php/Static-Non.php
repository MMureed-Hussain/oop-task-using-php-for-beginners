<!DOCTYPE html>
<html>
<body>

<?php
class message1 {
  protected static function nfo() {
    return "Alert New Hiring this Message is vicki Leaks";
  }
}

class message2 extends message1 {
  public $nformation;
  public function __construct() {
    $this -> nformation = parent::nfo();
  }	
}

$mess = new message2;
echo $mess -> nformation;
?>
 
</body>
</html>
