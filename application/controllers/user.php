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
        $this->load->view('form_user');
    }
    
    public function submit(){
        if($this->_submit_validate() === FALSE){
            $this->index();
            return;
        }
        $this->insert();
        
        $this->load->view('submit_sucess');
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
    
     public function insert(){
        
        $u = new models\User;
        $u->setUsername($this->input->post('username'));
        $u->setPassword($this->input->post('password'));
        $u->setEmail($this->input->post('email'));
        
        $this->em->persist($u);
        $this->em->flush();
        
        echo "Usuario salvo com o id: " . $u->getId() . "<br>user" . $u->getUsername();
    }
    
    public function allData()
    {
        $query = new Doctrine_Query()::;
        $query->from('user u');
        $query->orderby('u.id DESC');
        return $query->execute();
    }
}

?>
