<?php

if (!defined('BASEPATH'))
    exit('No direct script allowed!');


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Test extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('doctrine');
    }

    function index() {
        //$guests=$this->doctrine->em->getRepository('models\Guest')->findAll();
       // $this->load->view('guest', array('guest' => $guests)); 
       /**
        * $user = new models\User();
        $user->setUsername('juned');
        $user->setPassword('asdqwe123');
        $user->setEmail('juned@gmail.com');
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
        $this->load->view('user', array('user' => $user)); 
        */
        $guest = new models\Guest();
        $guest->set_user_name('ananto');
        $guest->setPassword('asdqwe123');
        $guest->setEmail('averyadesa@pt-swg.com');
        $this->doctrine->em->persist($guest);
        $this->doctrine->em->flush();        
    }
    /**
     function add(){
        $guest = new models\Guest();
        $this->doctrine->em->persist($guest);
        $this->doctrine->em->flush();
    }
     */   

}