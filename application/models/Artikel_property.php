<?php

namespace models;

/**
 * @Entity
 * @Table(name="artikel_property")
 **/
class Artikel_property{
    
    /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    * @var int
    */
    private $id;
    
    /**
     * @Column(type="blob", nullable=true)
     * @var Doctrine\DBAL\Types\BlobType
     **/
    private $picture;
    
    /**
     * @Column(type="blob", nullable=true)
     * @var Doctrine\DBAL\Types\BlobType
     **/
    private $video;
    
    /**
     * @Column(type="string", name="pic_url", nullable=true)
     * @var string 
     **/
    private $pic_url;
    
    /**
     * @Column(type="string", name="video_url", nullable=true)
     * @var string 
     **/
    private $video_url;
    
    /**
     * @Column(type="string", name="files_url", nullable=true)
     * @var string 
     **/
    private $files_url;
    
    /**
     * @ManyToOne(targetEntity="Artikel")
     **/
    private $artikel;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setPicture($picture) {
        $this->picture = $picture;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    public function setPicUrl($pic_rul) {
        $this->pic_url = $pic_url;
    }

    public function setVideoUrl($video_url) {
        $this->video_url = $video_url;
    }

    public function setFilesUrl($files_url) {
        $this->files_url = $files_url;
    }

    public function setArtikel($artikel) {
        $this->artikel = $artikel;
    }

    public function getId() {
        return $this->id;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getVideo() {
        return $this->video;
    }

    public function getPicUrl() {
        return $this->pic_url;
    }

    public function getVideoUrl() {
        return $this->video_url;
    }

    public function getFilesUrl() {
        return $this->files_url;
    }

    public function getArtikel() {
        return $this->artikel;
    }    
}

