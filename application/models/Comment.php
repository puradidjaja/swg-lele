<?php

namespace models;

/**
 * @Entity
 * @Table(name="comment")
 **/
class Comment{
    
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Column(type="text")
     * @var \Doctrine\DBAL\Types\TextType 
     **/
    private $content;
    
    /**
     * @Column(type="datetime", name="comment_date")
     * @var \Doctrine\DBAL\Types\DateTimeType 
     **/
    private $comment_date;
    
    /**
     * @ManyToOne(targetEntity="Menteri")
     **/
    private $menteri;
    
    /**
     * @ManyToOne(targetEntity="Artikel")
     **/
    private $artikel;
    
    /**
     * @ManyToOne(targetEntity="Guest")
     **/
    private $guest;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setDateComment($comment_date) {
        $this->comment_date = $comment_date;
    }

    public function setMenteri($menteri) {
        $this->menteri = $menteri;
    }

    public function setArtikel($artikel) {
        $this->artikel = $artikel;
    }

    public function setGuest($guest) {
        $this->guest = $guest;
    }

    public function getId() {
        return $this->id;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDateComment() {
        return $this->comment_date;
    }

    public function getMenteri() {
        return $this->menteri;
    }

    public function getArtikel() {
        return $this->artikel;
    }

    public function getGuest() {
        return $this->guest;
    }
}