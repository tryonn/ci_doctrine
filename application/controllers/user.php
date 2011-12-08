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

class User extends CI_Controller{
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
        $this->load->view('user/form_user');
    }
    
    public function submit(){
        if($this->_submit_validate() === FALSE){
            $this->index();
            return;
        }
        $dao = new \models\user_dao;
        $u = $dao->insert();
        $this->em->persist($u);
        $this->em->flush();
        $l['user'] = $this->lista_user();
        $this->load->view('user/lista_user', $l);
    }
    
    public function _submit_validate(){
        //validation rules
        $this->form_validation->set_rules('username', 'Username',
                'required|alpha_numeric|min_length[6]|max_length[12]|unique[User.username]');
        
        $this->form_validation->set_rules('password', 'Password',
            'required|min_length[6]|max_length[12]');

        $this->form_validation->set_rules('passconf', 'Confirm Password',
            'required|matches[password]');
        
        $this->form_validation->set_rules('email', 'E-mail',
            'required|valid_email|unique[User.email]');
        
        return $this->form_validation->run();
    }
    
    public function lista_user()
    {
        $qb = new QueryBuilder($this->em);
        $qb->select('u')
           ->from('models\User', 'u')
           ->orderBy('u.username', 'ASC');        
        $q = $qb->getQuery();        
        $users = $q->execute();
//        echo '<pre>';
//        $x = var_dump($users);
        return $users;
    }
}

?>
