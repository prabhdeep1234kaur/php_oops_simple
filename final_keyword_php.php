<html>
    Final : Keyword : Prevents Class inheritence or prevent overriding    
</html>

<?php

final class Vegies {

}
class Eggplant extends Vegies{ //will result in error


}

///

class Vegies {
    final public function welcome(){
        return "Hi";
    }
}
class Eggplant extends Vegies{ //will result in error

    public function welcome(){// can't override it

    }

}


?>