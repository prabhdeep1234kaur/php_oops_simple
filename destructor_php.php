<html>

    Destructor Called on objct destructed <br>

    __destruct() : called automatically at the end of script

</html>

<?php

class Vegies{ 

    //properties
    public $name;
    public $color; 


    //constructor class : no need of setters : called when we create object
    function __construct($vegName, $vegColor){
        $this->name = $vegName;
        $this->color = $vegColor;
    }

    //destructor class : no need of getter : called when objt is destroyed
    function __destruct(){
        echo "Name {$this->name}";
        echo "Color {$this->color}";
    }

}
//no getter : just set up the object
$spinach = new Vegies("Spinach", "Green"); 

?>