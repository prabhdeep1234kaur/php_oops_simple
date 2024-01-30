<html>

    public : propety / method : access anywhere : default


    <br>


    Potected : property/ method : accessed -> within class or by derived class
    <br>


    Private : property / method : accessed -> inside class only


</html>

<?php 
class Vegies {

    public $weight;
    private $name;
    protected $color;


    private function set_name($n){
        $this->name = $n;
    }

    protected function set_color($c){ 
        $this->color = $c;
    }

    function set_weight($w){  //default public 
        $this->weight = $w;
    }

}

$spinach = new Vegies();

//public : 
// $spinach->weight = '100'; //good
// $spinach->name = 'spinach'; //error
// $spinach->color = 'green'; //error


$spinach->set_weight(100); //good
$spinach->set_name("spinach"); //error
$spinach->set_color("green"); //error


?>
