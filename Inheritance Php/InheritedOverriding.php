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
  protected function Info(){
    echo "The Post :- {$this->post} <br> and Name :- {$this->name} <br>";
  }
} //inheritance with extends key word 
class Department extends Employee {
 public $type;
    public function __construct($name,$post,$type){
        $this->name =$name;
        $this->post =$post;
        $this->type =$type;
    }
   public function Info(){
echo" <br> The Name :- {$this->name} <br> Post :- {$this->post}<br>Working area is :- {$this->type} <br>";
    }     
}
$dept = new Department(" Hussain "," Developer "," React with Laravel ");   // OK. __construct() is public
//$dept->type();                             // OK. __type() is public
$dept->Info();                             // Error. __info() is protected
?>
</body>
</html>
