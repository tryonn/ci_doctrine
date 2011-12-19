<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ator
 *
 * @author simao-ana-sara
 */
namespace models;
/**
 * @Entity
 * @Table(name="ator")
 */
class Ator {
    /**
     * @Id
     * @Column(name="id")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @Column(name="ator", unique="true")
     */
    protected $ator;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAtor() {
        return $this->ator;
    }

    public function setAtor($ator) {
        $this->ator = $ator;
    }


    
}

?>
