<?php
namespace models;
/**
 * @Entity
 * @Table(name="user")
 */
class User{
    /**
     * @Id
     * @Column(name="id")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @Column(name="username")
     */
    protected $username;
    
    /**
     * @Column(name="password")
     */
    protected $password;
    
    /**
     * @Column(name="first_name")
     */
    protected $first_name;
    
    /**
     * @Column(name="last_name")
     */
    protected $last_name;
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }


}

?>
