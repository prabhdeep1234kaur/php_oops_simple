<html>
    Inheritance : class deried from another class\\
    <br>
    Extend : Keyword used  <br>
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

    protected function details(){ //protected : can be used by child class
        echo "My details are. my color is {$this->color} <br>";
    }

}

class Eggplant extends Vegies{
    public function myMessage(){
        echo "This is EggPlant <br>";
        $this->details(); ////// >>>>>>>>> Called here!!! because it has to inside class
    }
}

$eggplant = new Eggplant("Eggplant", "Purple"); //created from childclass
$eggplant->myMessage(); //from childclass
$eggplant->welcome(); //from parent class

//from parent class // but protected and gave error : we have to call it within class
//$eggplant->details(); 


?>