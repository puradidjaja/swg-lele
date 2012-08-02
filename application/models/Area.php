<?php

namespace models;

/**
 * @Entity
 * @Table(name="area")
 **/
class Area{
    
    /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    * @var int
    */
    private $id;
    
    /**
    * @Column(type="string")
    * @var string 
    **/
    private $country;
    
    /**
    * @Column(type="string")
    * @var string 
    **/
    private $province;
    
    /**
    * @Column(type="string")
    * @var string 
    **/
    private $city;
    
    /**
     * @ManyToOne(targetEntity="Menteri")
     **/
    private $menteri;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setProvince($province) {
        $this->province = $province;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setMenteri($menteri) {
        $this->menteri = $menteri;
    }

    public function getId() {
        return $this->id;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getProvince() {
        return $this->province;
    }

    public function getCity() {
        return $this->city;
    }

    public function getMenteri() {
        return $this->menteri;
    }

}