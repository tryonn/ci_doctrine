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
     * @Column(name="username", unique=true)
     */
    protected $username;
    
    /**
     * @Column(name="password")
     */
    protected $password;
        
    /**
     * @Column(name="email")
     */
    protected $email;
    
    
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
    
    public function getEmail() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}

?>
