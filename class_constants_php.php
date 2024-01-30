<html>
constant data within a class
<br>

const Keyword

<br>

Can't be changed
<br>

:: => scope resolution : to use outside the class -> className::ConstName
<br>
Self : Keyword : To use inside the class => Jus like $this but for const
<br>
</html>

<?php 

class LetsCheckConst{
    const MYFINALMESSGE = "Good to see you here!";

    const MYOTHERFINALMESSGE = "Good to see you here AGAIN!";

    public function hereTheMsg(){
        echo self::MYOTHERFINALMESSGE;
    }
}

echo LetsCheckConst::MYFINALMESSGE;

$myotherfinalmessage = new LetsCheckConst();
$myotherfinalmessage->hereTheMsg();
?>


<br>
