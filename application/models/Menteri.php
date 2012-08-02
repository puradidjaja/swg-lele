<?php

namespace models;

/**
 * @Entity
 * @Table(name="menteri")
 **/
class Menteri {
    
   /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    * @var int
    */
   private $id;

   /**
    * @Column(type="string", name="menteri_name")
    * @var string 
    **/
   private $menteri_name;
    
   /**
    * @Column(type="string", unique=true, nullable=false)
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
    * @Column(type="blob", nullable=true)
    * @var Doctrine\DBAL\Types\BlobType
    **/
   private $photo;
   
   /**
    * @OneToMany(targetEntity="Sale", mappedBy="menteri")
    * @var Sale[]
    **/
   private $sales;
   
   /**
    * @OneToMany(targetEntity="Comment", mappedBy="menteri")
    * @var Comment[]
    **/
   private $comments;
   
   /**
    * @OneToMany(targetEntity="Reward", mappedBy="menteri")
    * @var Reward[]
    **/
   private $rewards;
   
   /**
    * @OneToMany(targetEntity="Area", mappedBy="menteri")
    * @var Area[]
    **/
   private $areas;
   
   public function setId($id) {
       $this->id = $id;
   }

   public function setMenteriName($menteriName) {
       $this->menteri_name = $menteriName;
   }

   public function setUserName($user_name) {
       $this->user_name = $user_name;
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
       if (!$this->username) {
           throw new \Exception('The username must be set before the password can be hashed.');
       }
       return hash('sha256', $password . $this->username);
    }

   public function setEmail($email) {
       $this->email = $email;
   }

   public function setPhoto($photo) {
       $this->photo = $photo;
   }

   public function setSales($sales) {
       $this->sales = $sales;
   }

   public function setComments($comments) {
       $this->comments = $comments;
   }

   public function setRewards($rewards) {
       $this->rewards = $rewards;
   }
   
   public function setAreas($areas) {
       $this->areas = $areas;
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
   
   public function getId() {
       return $this->id;
   }

   public function getMenteriName() {
       return $this->menteri_name;
   }

   public function getUserName() {
       return $this->user_name;
   }

   public function getPassword() {
       return $this->password;
   }

   public function getEmail() {
       return $this->email;
   }

   public function getPhoto() {
       return $this->photo;
   }

   public function getSales() {
       return $this->sales;
   }

   public function getComments() {
       return $this->comments;
   }

   public function getRewards() {
       return $this->rewards;
   }
   
   public function getAreas() {
       return $this->areas;
   }
}

