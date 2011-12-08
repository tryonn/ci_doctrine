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
 * Description of vendedor
 *
 * @author simao-ana-sara
 */
class vendedor extends CI_Controller{
    private $em; //Entity manager do Doctrine 2    
    
    public function __construct() {
        
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');
        $this->load->library('doctrine');
        //carrego o entity manager como uma propriedade do controlador
        $this->em = $this->doctrine->em;     
    }
    public function index(){
        $this->load->view('vendedor\vendedor_view');
    }
    
    public function submit(){
        if($this->_submit_validate() === TRUE){
            $this->index();
            return;
        }
        
        $dao = new \models\vendedor_dao;
        $v = $dao->insert();
        $this->em->persist($v);
        $this->em->flush();
    }
    
    public function _submit_validate(){
        $this->form_validation->set_rules('nome', 'Nome',
        'required|alpha_numeric|min_length[6]|max_length[12]|unique[Vendedor.nome]');
    }
    
    public function delete(){
//        $dao = new models\vendedor_dao;
//        $dao->delete();
    }
}

?>
