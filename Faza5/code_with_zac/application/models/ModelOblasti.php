<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelOblasti
 *
 * @author Iva
 */
class ModelOblasti extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function ucitaj_oblasti(){
        
        
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->result();//vraca niz komentara
        return $result;
        
    }
    
    public function ucitaj_oblasti_sa_rez(){
        $id=$this->session->userdata('student')->IdRegistrovani;
        $this->db->where("r.IdRegistrovani=$id and r.IdOblast=o.IdOblast");
        $this->db->from('oblast o,rezultat r');
        $query=$this->db->get();
        $result=$query->result();//vraca niz komentara
        return $result;
        
    }
}
