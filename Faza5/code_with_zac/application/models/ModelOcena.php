<?php

/**
 * Klasa ModelOcena koja sluzi za komunikaciju sa bazom u kontekstu rada sa korisnickim ocenama
 * 
 */
class ModelOcena extends CI_Model{
    //put your code here
    
    /**
     * Autor:Iva Veljković
     * Konstruktor klase ModelOcena
     *  
     * @param
     * @return void
     */
    
    public function __construct() {
        parent::__construct();
    }
    
    
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja evidentira ocenu korisnika za kurs, ukoliko je
     * korisnik vec ocenjivao kurs onda se radi update ocene u bazi
     *  
     * @param
     * @return Object
     */
    
    
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
    
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja dohvata ocenu kursa iz baze 
     *  
     * @param
     * @return Object
     */
    
    
    public function dohvati_ocenu(){
        
        $this->db->where("IdKurs",1);
        $this->db->from('kurs');
        $query=$this->db->get();
        $result=$query->row();
        return $result->Ocena;
    }
    
}
