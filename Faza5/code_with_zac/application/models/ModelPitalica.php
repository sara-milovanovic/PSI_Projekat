<?php
/**
*Klasa ModelPitalica sluzi za rad sa bazom podataka prilikom rada sa pitalicama na testu
*/ 

class ModelPitalica extends CI_Model{
  
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
*Funkcija koja dodaje pitanje tipa radio i odgovore na njega za odredjenu oblast
*@param String $pitanje, String $oblast, Sting $ans1,Sting $ans2,Sting $ans3,Sting $ans4
*@return void
*/  
    public function dodaj_radio_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();
        
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
 /**
*Autor:
*
*Funkcija kojadohvata ID poslednje dodate pitalice
*@param 
*@return int
*/  
    
    public function dohvati_id(){
        
        $this->db->select_max("IdPitalica");
        $query=$this->db->get('pitalica');
        $result=$query->row();
        return $result->IdPitalica;
        
    }
       /**
*Autor:
*
*Funkcija koja dodaje pitanje tipa checkbox i odgovore na njega za odredjenu oblast
*@param String $pitanje, String $oblast, Sting $ans1,Sting $ans2,Sting $ans3,Sting $ans4
*@return void
*/  
    public function dodaj_checkbox_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();
        
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
       /**
*Autor:
*
*Funkcija koja dodaje pitanje tipa list i odgovore na njega za odredjenu oblast
*@param String $pitanje, String $oblast, Sting $ans1,Sting $ans2,Sting $ans3,Sting $ans4
*@return void
*/
    
    public function dodaj_list_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz){
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();
        
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
 /**
*Autor:
*
*Funkcija koja dodaje pitanje tipa fill i odgovor na njega za odredjenu oblast
*@param String $pitanje, String $oblast, Sting $ans1
*@return void
*/
    public function dodaj_fill_pitanje($pitanje,$oblast,$ans1){
        
        $this->db->where("Ime",$oblast);
        $this->db->from('oblast');
        $query=$this->db->get();
        $result=$query->row();
        
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
	
       /**
*Autor:
*
*Funkcija koja dohvata sve pitalice koje cekaju odobrenje admina
*@param 
*@return Object[]
*/
    
    public function dohvati_pitalicu_na_cekanju(){
        
        
        $this->db->where("p.IdPitalica=o.IdPitalica and Status='neaktivna' and Tacan=1");
        $this->db->from('pitalica p, odgovor o');
        $this->db->select("p.IdPitalica,p.Tekst,o.Tekst as Odgovor,p.Tip");
        $query=$this->db->get();
        $result=$query->result();
        return $result;
        
    }
/**
*Autor:
*
*Funkcija koja prebacuje pitalicu iz neaktivnog u aktivni status
*@param int $id
*@return 
*/    
    public function odobri_pitalicu($id){
        $this->db->set("Status","aktivna");
        $this->db->where('IdPitalica',$id);
        $this->db->update("pitalica");
        
    }
 /**
*Autor:
*
*Funkcija koja izbacuje pitalicu iz baze kada je admin ne odobri
*@param int $id
*@return 
*/  
    public function ponisti_pitalicu($id){
        
       $this->db->where("IdPitalica",$id);
       $this->db->delete("pitalica");
       
       $this->db->where("IdPitalica",$id);
       $this->db->delete("odgovor");
        
    }
/**
*Autor:
*
*Funkcija koja dohvata sve pitalice iz odredjene oblasti koje su aktivne
*@param int $idOblasti, String $t
*@return Object[]
*/      
    public function dohvati_po_vrsti($idOblasti,$t){
        $this->db->where("(IdOblast=$idOblasti) and (Status='aktivna')  ");
        $this->db->where("Tip",$t);
        $query=$this->db->get('pitalica');
        $result=$query->result();
        
        require_once 'system/helpers/array_helper.php';
        $rnd= random_element($result);
        
        return $rnd;
        
    }
 /**
*Autor:
*
*Funkcija koja dohvata sve ponudjene odgovore za odredjenu pitalicu
*@param int $id
*@return Object[]
*/     
    public function dohvati_po_vrsti_odgovor($id){
        
        $this->db->where("IdPitalica",$id);
        $query=$this->db->get('odgovor');
        $result=$query->result();
        
        shuffle($result);
        
        return $result;
    }
/**
*Autor:
*
*Funkcija koja dohvata tacan odgovor za odredjenu pitalicu
*@param int $id
*@return Object[]
*/      
    public function dohvati_po_vrsti_tacan_odgovor($id){
        
        $this->db->where("IdPitalica",$id);
        $this->db->where("Tacan",1);
        $query=$this->db->get('odgovor');
        $result=$query->result();
        
        return $result;
        
    }
  /**
*Autor:
*
*Funkcija koja nakon resavanja test evidentira rezultat studenta
*@param float $rez, int $oblast, int $id
*@return 
*/    
    public function update_result($rez,$oblast,$id){
        
        $this->db->where("IdRegistrovani",$id);
        $this->db->where("IdOblast",$oblast);
        $this->db->from('rezultat');
        $query=$this->db->get();
        $result=$query->row();
        
        if($result!=null){
            if($rez>=50){
                
                $this->db->set("Status",'polozio');
                
            }
            else $this->db->set("Status",'pao');
			
            $this->db->set("Procenat_tacnih",$rez);
            $this->db->where("IdRegistrovani",$id);
            $this->db->where("IdOblast",$oblast);
            $this->db->update("rezultat");
        }
        else{
            if($rez>=50){
                
                $this->db->set("Status",'polozio');
                
            }
            else $this->db->set("Status",'pao');
            
            $this->db->set("Procenat_tacnih",$rez);
            $this->db->set("IdRegistrovani",$id);
            $this->db->set("IdOblast",$oblast);
            $this->db->insert("rezultat");
            
        }
        
    }
}
