<html>
Method Classes > Parent has just the methods and class > Wants it child to do its work / fill it up
<br>

abstract Keyword


Rules : <br>
1. inheriting from abstract class ? child class method => should be same name <br>
2. inheriting from abstract class ? child class method => should be same or less restricted access modifiers
<br>
Eg : parent abstract method : proteted? Child class method has to be protected or public <br>
3. Type and no. of required Arg > should be same.  <br>
4. Child Class > Arg optional arg in addition
<br>

</html>

<?php
abstract class Fruit {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function welcome() : string ; //left upto child class to fill it
}


//child classes
class Apple extends Fruit {
    public function welcome() : string {
        return "Welcome to my github, I am $this->name <br>";
    }
}

class Kiwi extends Fruit{
    public function welcome() : string {
        return "My favourite fruit is $this->name";
    } 
}

class Cherry extends Fruit{
    public function welcome() : string {
        return "I hate  $this->name";
    } 
}


//create object
$apple = new Apple("Apple");
$kiwi = new Kiwi("Kiwi");
$cherry = new Cherry("Cherry");

echo $apple->welcome()."<Br>";
echo $kiwi->welcome()."<Br>";
echo $cherry->welcome()."<Br><br>
<br>
<br>
";


//////Eg two

abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "John Doe") {
        $prefix = "Mr.";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");
?>