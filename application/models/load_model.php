<?php

class Load_model extends CI_Model {
  
  /**
   * Adds initial data for dropdowns etc, to the DB
   * 
   * @obj - Loader class located in /libraries/Loader.php
   */
  function add_starter_data($obj){
    if(!empty($obj)){
      $property = $obj->collect_properties();
      foreach($property as $key => $value){
        print_r($property);
      }
    }
    else {
      log_message('error', 'add_starter_data function was passed an empty object in load_model');
    }
  }
  
  
}
