<?php

/**
*Klasa ModelMaterijal sluzi za rad sa bazom podataka prilikom rada sa materijalima i materijalima na cekanju
*/ 

class ModelMaterijal extends CI_Model{
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
*Funkcija koja dodaje materijal na cekanju za specificiranu oblast
*@param String $mat, String $oblast
*@return void
*/    
    public function dodaj_materijal($mat,$oblast){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();
        
        $id_oblast=$result->IdOblast;
                
        $this->db->set("Tekst", $mat);
        $this->db->set("IdOblast", $id_oblast);
        $this->db->insert("materijali_na_cekanju");
        
        
    } 
/**
*Autor:
*
*Funkcija koja dohvata Id oblasti na osnovu njenog imena
*@param String $oblast
*@return int
*/ 
    public function dohvati_id_oblasti($oblast){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();
        
        $id_oblast=$result->IdOblast;
        
    }
/**
*Autor:
*
*Funkcija koja dohvata sve materijale na cekanju po oblastima
*@param 
*@return Object[]
*/     
    public function dohvati_sve(){
        
        $this->db->where("m.IdOblast=o.IdOblast");
        $this->db->from('materijali_na_cekanju m, oblast o');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
        
    }
    
/**
*Autor:
*
*Funkcija koja dohvata materijal koji se nalazi na cekanju
*@param int $id
*@return Object
*/   
    
    public function dohvati_materijal($id){
        
        $this->db->where('IdMaterijali_na_cekanju',$id);
        $query=$this->db->get('materijali_na_cekanju');
        $result=$query->row();
        return $result;
        
        
    }
    
/**
*Autor:
*
*Funkcija koja brise materijal koji se nalazi na cekanju
*@param int $id
*@return void
*/     
      public function obrisi_materijal($id){
        
       $this->db->where("IdMaterijali_na_cekanju",$id);
       $this->db->delete("materijali_na_cekanju");
    
    }
/**
*Autor:
*
*Funkcija koja ubacuje odobren materijal u oblast kojoj taj materijal pripada
*@param int $res, String $mat
*@return void
*/  
    public function ubaci_odobren_materijal($res,$mat){
		
        $this->db->where("IdOblast",$res);
        $this->db->from('oblast');
        $query=$this->db->get();
        $kon=$query->row();
        
        if($kon!=NULL){
        
			$mat.=$kon->Materijal;
			$this->db->set("Materijal", $mat);
			$this->db->where("IdOblast",$res);
			$this->db->update("oblast");
        }
        
     
    }
/**
*Autor:
*
*Funkcija koja izlistava sve iz tabele oblast ukljucujuci i materijale
*@param
*@return Object[]
*/   
    public function izlistaj_materijale(){
        
        $query=$this->db->get('oblast');
        $result=$query->result();
        return $result;
        
    }
    
}
