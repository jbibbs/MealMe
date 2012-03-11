<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Attribute {
  
  private $name;
  private $values;
  private $table;
  
  public function __construct($name, $values, $table){
    $this->__set('name', $name);
    $this->__set('values', $values);
    $this->__set('table', $table);
  }
  
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