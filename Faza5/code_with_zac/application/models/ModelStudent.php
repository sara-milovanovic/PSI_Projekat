<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelStudent
 *
 * @author Nedeljko
 */
class ModelStudent extends CI_Model {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
   public function obrisi_studenta($id){
       $this->db->where("IdRegistrovani",$id);
       $this->db->delete("student");
       
       //iz tabele registrovani
       $this->db->where("IdRegistrovani",$id);
       $this->db->delete("registrovani");
       
   }
   
   public function dohvati_sve_sa_uspehom(){
        
        $this->db->where("r.IdRegistrovani=s.IdRegistrovani and res.IdRegistrovani=r.IdRegistrovani");
        $this->db->group_by("r.IdRegistrovani");
        $this->db->from('registrovani r, student s, rezultat res');
        $this->db->select("Username,avg(res.Procenat_tacnih) as  procenat_tacnih,r.IdRegistrovani");
        $query=$this->db->get();
        $result=$query->result();//vraca niz studenata
        

        return $result;
        
    }
    
    public function update_najboljeg($id){
        
        
        $this->db->set("Najbolji", "ne");
        $this->db->where("Najbolji","da");
        $this->db->update("student");
        
        $this->db->set("Najbolji", "da");
        $this->db->where("IdRegistrovani",$id);
        $this->db->update("student");
        
        
    }
    
    public function dohvati_najboljeg(){
        
        $this->db->where("Najbolji='da' and s.IdRegistrovani=r.IdRegistrovani");
        $this->db->from("student s, registrovani r");
        $query=$this->db->get();
        $result=$query->row();
        
        return $result->Username;
    }
    
}
