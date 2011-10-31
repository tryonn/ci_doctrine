<?php
/**
 * @property CI_Loader $load;
 * 
 */


/**
 * Description of form
 *
 * @author simao
 */
class Form extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('signup_form');
    }
}

?>
