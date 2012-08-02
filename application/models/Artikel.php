<?php

namespace models;

/**
 * @Entity
 * @Table(name="artikel")
 **/
class Artikel{
    
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Column(type="string", name="artikel_name")
     * @var string 
     **/
    private $artikel_name;
    
    /**
     * @Column(type="text", name="artikel_content")
     * @var \Doctrine\DBAL\Types\TextType 
     **/
    private $artikel_content;
    
    /**
     * @Column(type="datetime", name="artikel_release")
     * @var \Doctrine\DBAL\Types\DateTimeType 
     **/
    private $artikel_release;
    
    /**
     * @OneToMany(targetEntity="Comment", mappedBy="artikel")
     * @var Comment[]
     **/
    private $comments;
    
    /**
     * @OneToMany(targetEntity="Artikel_property", mappedBy="artikel")
     * @var Artikel_property[]
     **/
    private $artikel_properties;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getArtikel_name() {
        return $this->artikel_name;
    }

    public function setArtikel_name($artikel_name) {
        $this->artikel_name = $artikel_name;
    }

    public function getArtikel_content() {
        return $this->artikel_content;
    }

    public function setArtikel_content($artikel_content) {
        $this->artikel_content = $artikel_content;
    }

    public function getArtikel_release() {
        return $this->artikel_release;
    }

    public function setArtikel_release($artikel_release) {
        $this->artikel_release = $artikel_release;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function getArtikel_properties() {
        return $this->artikel_properties;
    }

    public function setArtikel_properties($artikel_properties) {
        $this->artikel_properties = $artikel_properties;
    }

}