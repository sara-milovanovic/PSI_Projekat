<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelKomentari
 *
 * @author Sara
 */
class ModelKomentari extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function ucitaj_komentare(){
        $this->db->where("k.IdRegistrovani=r.IdRegistrovani");
        $this->db->from('komentari k, registrovani r');
        $query=$this->db->get();
        $result=$query->result();//vraca niz komentara
        return $result;
    }
    public function upisi_komentar($novi,$user){
        
        $this->db->set("Tekst", $novi);
        $this->db->set("IdRegistrovani", $user);
        $this->db->set("DatumVreme", date("Y-m-d"));
        $this->db->set("IdKurs", 1);
        $this->db->insert("komentari");
        
        
    }
    
    public function brisi_komentar($id){
        
       $this->db->where("IdKomentari",$id);
       $this->db->delete("komentari");
        
    }
}
