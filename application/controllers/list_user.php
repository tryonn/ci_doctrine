<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_P
 */

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of list_user
 *
 * @author simao
 */
class list_user extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('user/lista_user');
    }
}

?>
