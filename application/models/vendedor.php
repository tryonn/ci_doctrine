<?php

namespace models;
/**
 * @Entity
 * @Table(name="vendedor")
 */

class Vendedor {
    /**
     * @Id
     * @Column(name="id")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /*
     * @Column(name="nome")
     */
    protected $nome;
    
     /*
     * @Column(name="email")
     */
    protected $email;
    
     /*
     * @Column(name="matricula")
     */
    protected $matricula;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    
}

?>
