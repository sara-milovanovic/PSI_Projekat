<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 * @author Sara
 */
class ModelMaterijal extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    //put your code here
    
    public function dodaj_materijal($mat,$oblast){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu oblast
        
        $id_oblast=$result->IdOblast;
                
        $this->db->set("Tekst", $mat);
        $this->db->set("IdOblast", $id_oblast);
        $this->db->insert("materijali_na_cekanju");
        
        
    } 
    
    public function dohvati_id_oblasti($oblast){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu oblast
        
        $id_oblast=$result->IdOblast;
        
    }
    
    public function dohvati_sve(){
        
        $this->db->where("m.IdOblast=o.IdOblast");
        $this->db->from('materijali_na_cekanju m, oblast o');
        $query=$this->db->get();
        $result=$query->result();//vraca niz komentara
        return $result;
        
    }
    
    
    
    public function dohvati_materijal($id){
        
        $this->db->where('IdMaterijali_na_cekanju',$id);
        $query=$this->db->get('materijali_na_cekanju');
        $result=$query->row();//vraca niz komentara
        return $result;
        
        
    }
    
    
      public function obrisi_materijal($id){
        
       $this->db->where("IdMaterijali_na_cekanju",$id);
       $this->db->delete("materijali_na_cekanju");
    
    }
    
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
    
}
