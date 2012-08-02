<?php

namespace models;

/**
 * @Entity
 * @Table(name="guest")
 **/
class Guest{
    
    /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    * @var int
    */
    private $id;
    
    /**
    * @Column(type="string", name="user_name")
    * @var string 
    **/
    private $user_name;
    
    
    /**
    * @Column(type="string")
    * @var string 
    **/
    private $password;
    
    /**
    * @Column(type="string")
    * @var string 
    **/
    private $email;
    
    /**
     * @Column(type="string", nullable=true)
     * @var string 
     **/
    private $phone;
    
    /**
     * @Column(type="string", nullable=true)
     * @var string 
     **/
    private $address;
    
    /**
     * @OneToMany(targetEntity="Comment", mappedBy="guest")
     * @var Comment[]
     **/
    private $comments;
    
    public function setId($id) {
        $this->id = $id;
    }

  
    /**
     * Encrypt the password before we store it
     *
     * @access	public
     * @param	string	$password
     * @return	void
     */
    public function setPassword($password) {
        $this->password = $this->hashPassword($password);
    }

    /**
     * Encrypt a Password
     *
     * @static
     * @access	public
     * @param	string	$password
     * @return	void
     */
    public function hashPassword($password) {
       if (!$this->user_name) {
           throw new \Exception('The username must be set before the password can be hashed.');
       }
       return hash('sha256', $password . $this->user_name);
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    
    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function getId() {
        return $this->id;
    }

 
    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getComments() {
        return $this->comments;
    }
    
    public function get_user_name() {
        return $this->user_name;
    }

    public function set_user_name($user_name) {
        $this->user_name = $user_name;
    }


}
