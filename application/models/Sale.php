<?php

namespace models;

/**
 * @Entity
 * @Table(name="sale")
 **/

class Sale{
    
   /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
     * @Column(type="integer", name="sale_amount")
     * @var int 
     **/
    private $sale_amount;
    
    /**
     * @Column(type="date", name="sale_date", nullable=true)
     * @var Doctrine\DBAL\Types\DateType 
     **/
    private $sale_date;
    
    /**
     * @Column(type="integer", name="sale_total")
     * @var int
     **/
    private $sale_total;
    
    /**
     * @ManyToOne(targetEntity="Menteri")
     **/
    private $menteri;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setSaleAmount($sale_amount) {
        $this->sale_amount = $sale_amount;
    }

    public function setSaleDate($sale_date) {
        $this->sale_date = $sale_date;
    }

    public function setSaleTotal($sale_total) {
        $this->sale_total = $sale_total;
    }

    public function setMenteri($menteri) {
        $this->menteri = $menteri;
    }

    public function getId() {
        return $this->id;
    }

    public function getSaleAmount() {
        return $this->sale_amount;
    }

    public function getSaleDate() {
        return $this->sale_date;
    }

    public function getSaleTotal() {
        return $this->sale_total;
    }

    public function getMenteri() {
        return $this->menteri;
    }

}
