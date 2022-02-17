<?php 
class Course() {
  public $coursecode; 
  public $name;
  public $level;
  public $duration; 
  
  function _setcoursecode($coursecode) {
    $this->coursecode = $coursecode; 
  }
  function _setname($name) {
    $this->name = $name;
  }
  function _setlevel($level) {
    $this->level = $level; 
  }
  function _setduration($duration) {
    $this->duration = $duration; 
  } 
  function _getlevel($level); {
  return $level; 
  }
}
?>
