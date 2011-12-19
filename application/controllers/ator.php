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
 * Description of User
 *
 * @author simao
 */
//namespace Doctrine\ORM;
use Doctrine\ORM\QueryBuilder;//

class Ator extends CI_Controller{
    //put your code here
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
        $a['a'] = $this->lista_ator();
        $this->load->view('ator_filme/form_ator', $a);
    }
    
    public function submit(){
        if($this->_submit_validate() === FALSE){
            $this->index();
            return;
        }
        
        try {
                $dao = new \models\ator_dao;
                $a = $dao->insert();
                $this->em->persist($a);
                $this->em->flush();
                $this->index();
                
        } catch (Exception $exc) {
//            echo $exc->getTraceAsString();
//              echo $exc->getTraceAsString();
              show_error('Article not found!' . $exc->getTraceAsString());
        }





        
    }
    
    public function _submit_validate(){
        //validation rules
        $this->form_validation->set_rules('ator', 'Ator',
                'required|alpha_numeric|min_length[6]|max_length[12]|unique[User.username]');
        return $this->form_validation->run();
    }
    
    public function lista_ator()
    {
        $qb = new QueryBuilder($this->em);
        $qb->select('a')
           ->from('models\Ator', 'a')
           ->orderBy('a.ator', 'ASC');        
        $q = $qb->getQuery();        
        $ator = $q->execute();
//        echo '<pre>';
//        $x = var_dump($ator);die;
        return $ator;
    }
}

?>
