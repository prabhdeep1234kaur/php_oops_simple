<html>
    Overriding Inherited Methods : inherited methods can be overriden by redefining them
    <br>
    By using same name
    <br>
    in the example : welcome and construct will be overridden  <br>

    <br> Overridden : Same methods and functions : but different parameters
</html>

<?php 
class Vegies {

    public $name;
    public $color;

    public function __construct($n,$c){
        $this->name = $n;
        $this->c = $c;
    }

    public function welcome(){
        echo "Welcome, my vegies are : {$this->name} <br>";
    }

}

class Eggplant extends Vegies{
   public $weight;

    public function __construct($name,$color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function welcome(){
        echo "Welcome, my vegies are : {$this->name} <br> {$this->color} <br> {$this->weight}";
    }

}

$eggplant = new Eggplant("Eggplant", "Purple", 10); //created from childclass
$eggplant->welcome();
?>