<html>
Constructor : initialize objt's prop on objt creation
<br>

__construct() : function > php calls this func > automatically > when objt of class created
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

    function get_name(){
      return $this->name;
    }
    function get_color(){
        return $this->color;
    }

}
$spinach = new Vegies("Spinach", "Green"); 
echo "<Br>". $spinach->get_name();
echo "<Br>". $spinach->get_color();


?>