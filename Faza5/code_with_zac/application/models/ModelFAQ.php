<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelFAQ
 *
 * @author Sara
 */
class ModelFAQ extends CI_Model{
    //put your code here
    
    /**
     * Autor:
     * Konstruktor klase ModelFAQ
     *  
     * @param
     * @return void
     */
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Autor:
     * Funkcija koja dohvata sva cesto postavljena pitanja iz baze i kao
     * rezultat vraca niz cesto postavljenih pitanja
     *  
     * @param
     * @return Object[]
     */
    
    public function dohvati_sve_faq(){
        $this->db->from('faq');
        $query=$this->db->get();
        $result=$query->result();//vraca niz faq
        return $result;
        
    }
}
