<?php
/**
 * Adds building blocks and starting information to DB
 * 
 */
require_once('application/libraries/Attribute.php');
class Load extends CI_Controller {
  
  public function __construct() {
    parent::__construct();

   // $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'email'));
    $this->load->model('load_model');
    
    //Displays some developer information - what's going on behind the scenes - disable for production!
    $this->output->enable_profiler(TRUE);
  }
  
  public function index(){
    $attributes = array(
      'courses' => array(
        array('course' => 'Breakfast'),
        array('course' => 'Lunch'),
        array('course' => 'Dinner'),
        array('course' => 'Dessert'),
        array('course' => 'Other'),
      ),
      'cuisines' => array(
        array('cuisine' => 'American'),
        array('cuisine' => 'Chinese'),
        array('cuisine' => 'Japanese'),
        array('cuisine' => 'French'),
        array('cuisine' => 'British'),
        array('cuisine' => 'Italian'),
        array('cuisine' => 'Indian'),
        array('cuisine' => 'Korean'),
        array('cuisine' => 'Mediterranean'),
        array('cuisine' => 'Thai'),
        array('cuisine' => 'Other'),
      ),
      'difficulties' => array(
        array('difficulty' => 'Beginner'),
        array('difficulty' => 'Intermediate'),
        array('difficulty' =>  'Advanced'),
      ),
      'main_ingredients' => array(
        array('main_ingredient' => 'Beef'),
        array('main_ingredient' => 'Veggies'),
        array('main_ingredient' => 'Lamb'),
        array('main_ingredient' => 'Pasta'),
        array('main_ingredient' => 'Poultry'),
        array('main_ingredient' => 'Fruit'),
        array('main_ingredient' => 'Bread'),
        array('main_ingredient' => 'Tofu'),
        array('main_ingredient' => 'Fish'),
      ),
    );
     $this->load_model->add_starter_data($attributes);
  }
    

  
  
}
?>
