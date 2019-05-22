<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modelitalica
 *
 * @author Sara
 */
class ModelPitalica extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    //put your code here
    
    public function dodaj_radio_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu oblast
        
        $id_oblast=$result->IdOblast;
        
        $this->db->set("Status", "neaktivna");
        $this->db->set("Tekst", $pitanje);
        $this->db->set("Tip", "radio");
        $this->db->set("IdOblast",$id_oblast);
        $this->db->insert("pitalica");
        
        $id_pitalica=$this->dohvati_id();
        
        $this->db->set("Tekst", $ans1);
        $this->db->set("Redni_br", 1);
        $this->db->set("IdPitalica ",$id_pitalica);
        $this->db->set("Tacan",1);
        $this->db->insert("odgovor");
        
        if($ans2!=""){
            $this->db->set("Tekst", $ans2);
            $this->db->set("Redni_br", 2);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",0);
            $this->db->insert("odgovor");
        }
        if($ans3!=""){
            $this->db->set("Tekst", $ans3);
            $this->db->set("Redni_br", 3);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",0);
            $this->db->insert("odgovor");
        }
        if($ans4!=""){
            $this->db->set("Tekst", $ans4);
            $this->db->set("Redni_br", 4);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",0);
            $this->db->insert("odgovor");
        }
        
    }
    
    public function dohvati_id(){
        
        $this->db->select_max("IdPitalica");
        $query=$this->db->get('pitalica');
        $result=$query->row();
        return $result->IdPitalica;
        
    }
    
    public function dodaj_checkbox_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu oblast
        
        $id_oblast=$result->IdOblast;
        
        $this->db->set("Status", "neaktivna");
        $this->db->set("Tekst", $pitanje);
        $this->db->set("Tip", "checkbox");
        $this->db->set("IdOblast",$id_oblast);
        $this->db->insert("pitalica");
        
        $id_pitalica=$this->dohvati_id();
        
        $this->db->set("Tekst", $ans1);
        $this->db->set("Redni_br", 1);
        $this->db->set("IdPitalica ",$id_pitalica);
        $this->db->set("Tacan",$niz[0]);
        $this->db->insert("odgovor");
        
        if($ans2!=""){
            $this->db->set("Tekst", $ans2);
            $this->db->set("Redni_br", 2);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",$niz[1]);
            $this->db->insert("odgovor");
        }
        if($ans3!=""){
            $this->db->set("Tekst", $ans3);
            $this->db->set("Redni_br", 3);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",$niz[2]);
            $this->db->insert("odgovor");
        }
        if($ans4!=""){
            $this->db->set("Tekst", $ans4);
            $this->db->set("Redni_br", 4);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",$niz[3]);
            $this->db->insert("odgovor");
        }
        
    }
    
    public function dodaj_list_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz){
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu oblast
        
        $id_oblast=$result->IdOblast;
        
        $this->db->set("Status", "neaktivna");
        $this->db->set("Tekst", $pitanje);
        $this->db->set("Tip", "list");
        $this->db->set("IdOblast",$id_oblast);
        $this->db->insert("pitalica");
        
        $id_pitalica=$this->dohvati_id();
        
        $this->db->set("Tekst", $ans1);
        $this->db->set("Redni_br", 1);
        $this->db->set("IdPitalica ",$id_pitalica);
        $this->db->set("Tacan",1);
        $this->db->insert("odgovor");
        
        if($ans2!=""){
            $this->db->set("Tekst", $ans2);
            $this->db->set("Redni_br", 2);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",0);
            $this->db->insert("odgovor");
        }
        if($ans3!=""){
            $this->db->set("Tekst", $ans3);
            $this->db->set("Redni_br", 3);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",0);
            $this->db->insert("odgovor");
        }
        if($ans4!=""){
            $this->db->set("Tekst", $ans4);
            $this->db->set("Redni_br", 4);
            $this->db->set("IdPitalica ",$id_pitalica);
            $this->db->set("Tacan",0);
            $this->db->insert("odgovor");
        }
        
    }
    
    public function dodaj_fill_pitanje($pitanje,$oblast,$ans1){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu oblast
        
        $id_oblast=$result->IdOblast;
        
        $this->db->set("Status", "neaktivna");
        $this->db->set("Tekst", $pitanje);
        $this->db->set("Tip", "Fill the box");
        $this->db->set("IdOblast",$id_oblast);
        $this->db->insert("pitalica");
        
        $id_pitalica=$this->dohvati_id();
        
        $this->db->set("Tekst", $ans1);
        $this->db->set("Redni_br", 1);
        $this->db->set("IdPitalica ",$id_pitalica);
        $this->db->set("Tacan",1);
        $this->db->insert("odgovor");
        
    }
}
