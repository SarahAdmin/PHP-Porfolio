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
  function _getemailaddres() {
    return $this->emailaddress; 
  }
  function _getFullName(){
    return "$this->firstname, $this->lastname";
  }
}

?>
