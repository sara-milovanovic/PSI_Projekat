<?php

/**
*Klasa ModelStuden sluzi za rad sa bazom podataka prilikom rada sa informacijama o studentima
*/ 
class ModelStudent extends CI_Model {
  /**
*Autor:
*
*Kreiranje nove instance
*@param 
*@return void
*/  
     
    
    public function __construct() {
        parent::__construct();
    }
    
  
/**
*Autor:
*
*Funkcija koja brise odredjenig studenta iz baze
*@param int $id
*@return void
*/     
    
   public function obrisi_studenta($id){
       $this->db->where("IdRegistrovani",$id);
       $this->db->delete("student");
       
      
       $this->db->where("IdRegistrovani",$id);
       $this->db->delete("registrovani");
       
   }
   
  /**
*Autor:
*
*Funkcija koja dohvata sve studente i njihov dosadasnji prosecan uspeh na svim testovima
*@param 
*@return Object[]
*/
   public function dohvati_sve_sa_uspehom(){
        
        $this->db->where("r.IdRegistrovani=s.IdRegistrovani and res.IdRegistrovani=r.IdRegistrovani");
        $this->db->group_by("r.IdRegistrovani");
        $this->db->from('registrovani r, student s, rezultat res');
        $this->db->select("Username,avg(res.Procenat_tacnih) as  procenat_tacnih,r.IdRegistrovani");
        $query=$this->db->get();
        $result=$query->result();
        

        return $result;
        
    }
   /**
*Autor:
*
*Funkcija koja postavlja odredjenog studenta za studenta meseca
*@param int $id
*@return void
*/ 
    public function update_najboljeg($id){
        
        
        $this->db->set("Najbolji", "ne");
        $this->db->where("Najbolji","da");
        $this->db->update("student");
        
        $this->db->set("Najbolji", "da");
        $this->db->where("IdRegistrovani",$id);
        $this->db->update("student");
        
        
    }
	
/**
*Autor:
*
*Funkcija koja dohvata username trenutno najboljeg studenta
*@param 
*@return String
*/
    
    public function dohvati_najboljeg(){
        
        $this->db->where("Najbolji='da' and s.IdRegistrovani=r.IdRegistrovani");
        $this->db->from("student s, registrovani r");
        $query=$this->db->get();
        $result=$query->row();
        
        if($result!=null) return $result->Username;
        
        return null;
    }
 /**
*Autor:
*
*Funkcija koja menja sifru studenta sa odredjenom e_mail adresom
*@param String $email, String $pass
*@return void
*/
    
    public function update_sifre($email,$pass){
        $this->db->set("Password",$pass);
        $this->db->where("e_mail",$email);
        $this->db->update("registrovani");
        
    }
}
