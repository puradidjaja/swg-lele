<?php

namespace models;

/**
 * @Entity
 * @Table(name="shout_box")
 **/
class Shout_box{
    
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;
    
    /**
     * @Column(type="text", name="shout_content")
     * @var \Doctrine\DBAL\Types\TextType 
     **/
    private $shout_content;
    
    /**
     * @Column(type="datetime", name="shout_date", nullable=true)
     * @var \Doctrine\DBAL\Types\DateTimeType 
     **/
    private $shout_date;
    
    /**
     * @Column(type="string", name="shouter")
     * @var string 
     **/
    private $shouter;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setShoutContent($shout_content) {
        $this->shout_content = $shout_content;
    }

    public function setShoutDate($shout_date) {
        $this->shout_date = $shout_date;
    }

    public function setShouter($shouter) {
        $this->shouter = $shouter;
    }

    public function getId() {
        return $this->id;
    }

    public function getShoutContent() {
        return $this->shout_content;
    }

    public function getShoutDate() {
        return $this->shout_date;
    }

    public function getShouter() {
        return $this->shouter;
    }
}
