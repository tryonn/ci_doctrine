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
class vendedor_dao extends \CI_Controller{
    //put your code here
    
    public function insert(){

        $v = new \models\Vendedor;
        $v->setNome($this->input->post('nome'));
        $v->setEmail($this->input->post('email'));
        $v->setMatricula($this->input->post('matricula'));
        return $v;
    }
}

?>
