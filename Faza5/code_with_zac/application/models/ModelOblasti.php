<?php

/**
 * Klasa ModelOblasti koja sluzi za komunikaciju sa bazom i sadrzi fje vezane za oblasti i rezultate za oblasti
 * 
 */

class ModelOblasti extends CI_Model{
    
    /**
     * Autor:Sara Milovanović
     * Konstruktor klase ModelOblasti
     * 
     * @param
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Autor:Sara Milovanović
     * Funkcija koja vraca niz svih oblasti
     * 
     * @param
     * @return Object[]
     */
    public function ucitaj_oblasti(){
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
        
    }
    
    /**
     * Autor:Sara Milovanović
     * Funkcija koja vraca niz svih oblast sa rezultatima koje je na njima ostvario trenutno ulogovani student
     * 
     * @param
     * @return Object[]
     */
    public function ucitaj_oblasti_sa_rez(){
        $id=$this->session->userdata('student')->IdRegistrovani;
        $this->db->where("r.IdRegistrovani=$id and r.IdOblast=o.IdOblast");
        $this->db->from('oblast o,rezultat r');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
}
