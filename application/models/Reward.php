<?php

namespace models;

/**
 * @Entity
 * @Table(name="reward")
 **/
class Reward{
    
    /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    * @var int
    */
    private $id;
    
    /**
    * @Column(type="string", name="reward_name", nullable=true)
    * @var string 
    **/
    private $reward_name;
    
    /**
    * @Column(type="string", name="reward_type", nullable=true)
    * @var string 
    **/
    private $reward_type;
    
    /**
     * @Column(type="datetime", name="reward_date", nullable=true)
     * @var \Doctrine\DBAL\Types\DateTimeType 
     **/
    private $reward_date;
    
     /**
     * @ManyToOne(targetEntity="Menteri")
     **/
    private $menteri;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setRewardName($reward_name) {
        $this->reward_name = $reward_name;
    }

    public function setRewardType($reward_type) {
        $this->reward_type = $reward_type;
    }

    public function setRewardDate($reward_date) {
        $this->reward_date = $reward_date;
    }

    public function setMenteri($menteri) {
        $this->menteri = $menteri;
    }

    public function getId() {
        return $this->id;
    }

    public function getRewardName() {
        return $this->reward_name;
    }

    public function getRewardType() {
        return $this->reward_type;
    }

    public function getRewardDate() {
        return $this->reward_date;
    }

    public function getMenteri() {
        return $this->menteri;
    }
}
