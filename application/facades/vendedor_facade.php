<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index_facade
 *
 * @author simao-ana-sara
 */
class Vendedorfacade extends Facade{
    //put your code here
    public function index(){
        $dao = new vendedorDAO();
    }
    public function msn(){
        $dao = new vendedorDAO();
        $dao->save();
        return true;
    }
}

?>
