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
class ator_dao extends \CI_Controller{
    //put your code here
    
    public function insert(){

        $a = new \models\Ator;
        $a->setAtor($this->input->post('ator'));
        return $a;
    }
}

?>
