<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelOcena
 *
 * @author Sara
 */
class ModelOcena extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    //put your code here
    
    public function oceni($id,$ocena){
        
        $this->db->where("IdRegistrovani",$id);
        $this->db->from('ocena');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu ocenu ako je ima
        
        if($result!=null) {
            
            $flag=$result->IdOcena;
            
        }
            
        if(isset($flag)){
            
            $this->db->set("Vrednost", $ocena);
            $this->db->where("IdOcena",$flag);
            $this->db->update("ocena");
            //echo "updateovano";
        }
        else{
            
            $this->db->set("Vrednost", $ocena);
            $this->db->set("IdRegistrovani", $id);
            $this->db->set("IdKurs", 1);
            $this->db->insert("ocena");
            //echo "insetrovano";
        }
        
        //update tabele kurs kako bi se izracunala nova ocena za kurs
        $this->db->where("IdKurs",1);
        $this->db->from('ocena o');
        $this->db->group_by("IdKurs");
        $this->db->select("avg(o.Vrednost) as  prosek");
        $query=$this->db->get();
        $result=$query->row();//vraca niz studenata
        
        $prosecna=$result->prosek;
        
        $this->db->set("Ocena", $prosecna);
        $this->db->where("IdKurs",1);
        $this->db->update("kurs");
        
    }
    
    public function dohvati_ocenu(){
        
        $this->db->where("IdKurs",1);
        $this->db->from('kurs');
        $query=$this->db->get();
        $result=$query->row();
        return $result->Ocena;
    }
    
}
