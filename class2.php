<?php 
class student {
    public $idnumber;
    public $firstname;
    public $lastname;
    public $course;

    function set_idnumber ($idnumber) {
        $this->idnumber = $idnumber;
    }
    function get_idnumber() {
        return $this->idnumber;
    }
    function set_firstname($firstname) {
        $this->firstname = $firstname;
    }
    function get_firstname() {
        return $this->firstname;
    }
    function set_lastname($lastname) {
    $this->lastname = $lastname;
    }
    function get_lastname()
    { 
        return $this->lastname;
    }
    function set_course($course) {
        $this->course = $course;
    }
    function get_course() {
        return $this->course;
    }
}

$raven = new student();
$raven->set_idnumber(1);
$raven->set_firstname('Raven');
$raven->set_lastname('Adams');
$raven->set_course('Computer Games Programming');

echo $raven->get_idnumber;
echo "</br>";
echo $raven->get_firstname;
echo "</br>";
echo $raven->get_lastname;
echo "</br>";
echo $raven->get_course;

?>
