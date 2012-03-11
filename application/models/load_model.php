<?php

class Load_model extends CI_Model {
  
  /**
   * Adds initial data for dropdowns etc, to the DB
   * 
   * @obj - Loader class located in /libraries/Loader.php
   */
  function add_starter_data($arr){
    if(!empty($arr) && is_array($arr)){
      foreach($arr as $key => $value){
        foreach($value as $index => $attribute){
          $this->db->insert($key, $attribute);
        }
      }
      }
    else {
      log_message('error', 'add_starter_data function was passed an invalid object type in load_model.php');
    }
  }
  
  
}
