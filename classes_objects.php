
<html>
    Class : <br>
    1. Classes are nothing without objects<br>
    2. Multiple object from one class <br>
    3. every object > all prop of class <br>
    <br>
    Object : <br>
    Uses <i>new</i> Keyword

    <br>
    This : Refers to current object BUT INSIDE METHOD

    <br>

    instanceOf -> check object belongs to class? 
   
    <br>
</html>

<?php 

class Vegies{ 

    //properties
    public $name;
    public $color; 


    //methods : setters
    function set_name($vegName){
        $this->name = $vegName;
    }
    function set_color($vegColor){
        $this->color = $vegColor;
    }

    //methods : getters
    function get_name(){
      return $this->name; //this keyword : Refers to current object BUT INSIDE METHOD
    }
    function get_color(){
        return $this->color;
    }

}


//object : new keyword 
$spinach = new Vegies(); //spinach and pumpkin are instances of class vegies
$pumpkin = new Vegies();

//setting
$spinach->set_name('Spiniach');$spinach->set_color('Green');
$pumpkin->set_name('Pumpkin');$pumpkin->set_color('orange');


//getting
echo "Names => ".$spinach->get_name().' '.$pumpkin->get_name().'<br>';
echo "Colors => ".$spinach->get_color().' '.$pumpkin->get_color().'<br>';


/**
 * changing value of object outside of class
 * **/
//$spinach->name = "Spinach";

//instanceOf -> return 1 or 0
print_r($spinach instanceof Vegies);
?>