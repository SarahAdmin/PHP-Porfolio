<?php 
class buddy { 
    var $age;

    function buddy($new_age)
    {
        $this->age = $new_age;
    }
    function Birthday()
    {
        $this->age++;
    }
}
$raven = new buddy(10);
echo "A current age is $raven->age years old </br>";
echo "Birthday </br>"; 
$raven->Birthday();
echo "She is going to be $raven->age in November </br>";
?>