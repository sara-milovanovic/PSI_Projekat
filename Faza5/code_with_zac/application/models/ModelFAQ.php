<?php
/**
 * Klasa ModelFAQ koja sluzi za komunikaciju sa bazom u kontekstu rada sa cesto postavljanim pitanjima
 * 
 */

class ModelFAQ extends CI_Model{
    
    /**
     * Autor:Sara Milovanović
     * Konstruktor klase ModelFAQ
     *  
     * @param
     * @return void
     */
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Autor:Sara Milovanović
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
