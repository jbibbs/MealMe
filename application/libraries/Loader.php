<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Loader {
  
  private $courses;
  private $cuisines;
  private $difficulties;
  private $main_ingredients;
  
  public function __get($property){
    if(property_exists($this, $property)){
      return $this->$property;
    }
  }
  
  public function __set($property, $value){
    if(property_exists($this, $property)){
      $this->$property = $value;
    }
  }
}

?>