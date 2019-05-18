<?php

class ModelVest extends CI_Model{


    public function __construct() {
        parent::__construct();
    }

    public function dohvatiVesti($autor=NULL){
        if ($autor != NULL) {
            $this->db->where("autor", $autor);
        }
        $query=$this->db->get('Vest');
        $result=$query->result();//vraca niz vesti
        return $result;
    }
    
    public function dohvatiVest($idvesti){
        $this->db->where("id",$idvesti);
        $this->db->where("v.autor=a.korisnicko_ime");
        $this->db->from('Vest v, Autor a');
        $query=$this->db->get();
        $result=$query->row();//vraca jednu vest
        return $result;
    }
    
    public function pretraga($tekst){
       // $query=$this->db->query("select * from Vest where naslov like '%$naziv%' OR sadrzaj like'%$tekst$'");

        $this->db->like("naslov", $tekst);
        $this->db->or_like("sadrzaj", $tekst);
        $this->db->from("vest");
        $this->db->select("naslov, autor");
        
        $query=$this->db->get();

        return $query->result();
    }
    
    public function info(){
        $this->db->from("vest");
        $this->db->group_by("naslov");
        $this->db->select("naslov, count(*) as  broj");
        $query=$this->db->get();
        return $query->result();
    }
    
    public function dodaj($naslov, $sadrzaj,$autor){
        $this->db->set("autor", $autor);
        $this->db->set("naslov", $naslov);
        $this->db->set("sadrzaj",$sadrzaj);
        $this->db->set("datum", mdate("%Y-%m-%d"));
        $this->db->insert("vest");
    }
    public function izmeniVest($idVest, $naslov, $sadrzaj,$autor=NULL){
        $this->db->set("naslov", $naslov);
        $this->db->set("sadrzaj",$sadrzaj);
        $this->db->set("datum", mdate("%Y-%m-%d"));
        if ($autor != NULL) {
            $this->db->where("autor", $autor);
        }
        $this->db->where("id",$idVest);
        $this->db->update("vest");
    }
    public function obrisiVest($idVest, $autor=NULL){
        if ($autor != NULL) {
            $this->db->where("autor",$autor);
        }
        $this->db->where("id",$idVest);
        $this->db->delete("vest");
    }
}

