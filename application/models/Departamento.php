<?php
namespace models;
/**
 * @Entity
 * @Table(name="departamento")
 */

/**
 * Description of Departamento
 *
 * @author simao
 */
class Departamento {
    
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @Column(type="string", length=50)
     */
    protected $nome;
    
    /**
     * @Column(type="string", length=32)
     */
    protected $descricao;
    
    /**
     * 
     */
    
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

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}


?>
