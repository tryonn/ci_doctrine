<?php
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
 * Description of userDAO
 *
 * @author simao-ana-sara
 */
namespace models;
class user_dao extends \CI_Controller{
    //put your code here
    
    public function insert(){

        $u = new \models\User;
        $u->setUsername($this->input->post('username'));
        $u->setPassword($this->input->post('password'));
        $u->setEmail($this->input->post('email'));
        return $u;
    }
}

?>
