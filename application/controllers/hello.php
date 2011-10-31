<?php
/**
 * @property CI_Loader $load
 *  
 */

use models\User;

/**
 * Description of hello
 *
 * @author simao
 */
class Hello extends CI_Controller{
    
    private $em; //Entity manager do Doctrine 2
    
    public function __construct() {
        parent::__construct();
        $this->load->library('doctrine');
        //carrego o entity manager como uma propriedade do controlador
        $this->em = $this->doctrine->em;        
    }
    
    public function index(){
        $this->load->library('doctrine');
        //carrego o entity manager como uma propriedade do controlador
        $this->em = $this->doctrine->em;
    }
    public function world(){
        echo "Hello CodeIgniter";
    }
    
    public function userAdd(){
        
        $u = new models\User;
        $u->setUsername('Juca');
        $u->setPassword('1235');
        $u->setFirst_name('Niedja');
        $u->setLast_name('Menezes');
        
        $this->em->persist($u);
        $this->em->flush();
        
        echo "Usuario salvo com o id: " . $u->getId();
    }
}
?>
