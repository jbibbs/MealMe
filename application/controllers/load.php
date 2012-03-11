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
    $courses = array('course' => array('Breakfast', 'Lunch', 'Dinner', 'Dessert', 'Other'));
    $cuisines = array('cuisine' => array('American', 'Chinese', 'Japanese', 'French', 'British', 'Italian', 'Indian', 'Korean', 'Mediterranean', 'Thai', 'Other'));
    $difficulties = array('difficulty' => array('Beginner', 'Intermediate', 'Advanced'));
    $main_ingredients = array('main_ingredient' => array('Beef', 'Veggies', 'Lamb', 'Pasta', 'Poultry', 'Fruit', 'Bread', 'Tofu', 'Fish'));
     
    $items = array(  
      'courses' => new Attribute($courses),
      'cuisines' => new Attribute($cuisines),
      'difficulties' => new Attribute($difficulties),
      'main_ingredients' => new Attribute($main_ingredients),
    );
    $this->load_model->add_starter_data($items);
  }
  
  
}
?>
