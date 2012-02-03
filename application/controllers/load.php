<?php
/**
 * Adds building blocks and starting information to DB
 * 
 */
require_once('application/libraries/Loader.php');
class Load extends CI_Controller {
  
  public function __construct() {
    parent::__construct();

   // $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'email'));
    $this->load->model('load_model');
    
    //Displays some developer information - what's going on behind the scenes - disable for production!
    //$this->output->enable_profiler(TRUE);
  }
  
  public function index(){
    $courses = array('Breakfast', 'Lunch', 'Dinner', 'Dessert', 'Other');
    $cuisines = array('American', 'Chinese', 'Japanese', 'French', 'British', 'Italian', 'Indian', 'Korean', 'Mediterranean', 'Thai', 'Other');
    $difficulties = array('Beginner', 'Intermediate', 'Advanced');
    $main_ingredients = array('Beef', 'Veggies', 'Lamb', 'Pasta', 'Poultry', 'Fruit', 'Bread', 'Tofu', 'Fish');
       
    $starter = new Loader;
    
    $starter->__set('courses', $courses);
    $starter->__set('cuisines', $cuisines);
    $starter->__set('difficulties', $difficulties);
    $starter->__set('main_ingredients', $main_ingredients);
    
    $this->load_model->add_starter_data($starter);
    print_r($starter);
  }
  
  
}
?>
