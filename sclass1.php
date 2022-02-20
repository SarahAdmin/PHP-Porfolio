<?php 
class Student {
  public $id; 
  public $firstname;
  public $lastname;
  public $emailaddres;

  function _setid($id) {
    $this->id = $id;
  }
  function _getid() {
  return $this->id;
  }
  function _setfirstname($firstname) {
    $this->firstname= $firstname; 
  }
  function _setlastname($lastname) {
    $this->lastname = $lastname; 
  }
  function _setemailaddress($emailaddress) {
    $this->emailaddress = $emailaddress; 
  }
  function _getemailaddress() {
  return $this->emailaddress; 
  }
  
  function _getFullName(){
    return "$this->firstname, $this->lastname";
  }
}

$lee = new Student();
$lee->_setid(1);
$lee-> _setfirstname('Lee');
$lee->_setlastname('Cox');
$lee->_setemailaddress('leecox@kingsuni.ac.uk');

echo $lee->_getid();
echo "<br>";
echo $lee->_getFullName();
echo "</br>";
echo $lee->_getemailaddress();
echo "<br>";

$matt = new Student();
$matt->_setid(2);
$matt-> _setfirstname('Matt');
$matt->_setlastname('Bond');
$matt->_setemailaddress('mattbond@kingsuni.ac.uk');

echo $matt->_getid();
echo "<br>";
echo $matt->_getFullName();
echo "</br>";
echo $matt->_getemailaddress();
?>
