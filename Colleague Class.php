<?php 
class Colleague {

    public $employerid;
    public $firstname;
    public $lastname; 
    public $position; 
    public $salary;


function _setemployerid($employerid) {
    $this->employerid = $employerid;
}
function _setfirstname($firstname) {
     $this->firstname = $firstname; 
}

function _setlastname($lastname) {
    $this->lastname = $lastname;
}
function _setposition($position) { 
    $this->position = $position; 
}
function _setsalary($salary) {
    $this->salary = $salary;
}

function _getFullName() {
    return "$this->firstname, $this->lastname";
}
function _getEmployDetails() {
    return "$this->position, $this->salary";
}
 }
 ?>

