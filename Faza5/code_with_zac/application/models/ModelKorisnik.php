<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelAutor
 *
 * @author Korisnik
 */
class ModelKorisnik extends CI_Model {
    public $korisnik;
    
    public function __construct() {
        parent::__construct();
        $this->korisnik=NULL;
    }
    
    public function dohvatiKorisnika($korisnicko_ime){
        $result=$this->db->where('Username',$korisnicko_ime)->get('registrovani');
        $korisnik=$result->row();
        if ($korisnik!=NULL) {
            $this->korisnik=$korisnik;
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function dohvatiKorisnika_id($id){
        $result=$this->db->where('IdRegistrovani',$id)->get('registrovani');
        $korisnik=$result->row();
        if ($korisnik!=NULL) {
            $this->korisnik=$korisnik;
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function dohvatiUsernameSignup($korisnicko_ime){
        $result=$this->db->where('Username',$korisnicko_ime)->get('registrovani');
        $korisnik=$result->row();
        if ($korisnik!=NULL) {
            
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function dohvatiMail($mail){
        $result=$this->db->where('e_mail',$mail)->get('registrovani');
        $korisnik=$result->row();
        if ($korisnik!=NULL) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
     
    public function insert_korisnik($u,$p,$m,$n,$s){
        
        $this->db->set("Username", $u);
        $this->db->set("Password", $p);
        $this->db->set("Ime",$n);
        $this->db->set("e_mail",$m);

        $this->db->set("Prezime", $s);
        $this->db->insert("registrovani");
        
        
        $this->db->where("Username",$u);
        $this->db->from('registrovani');
        $query=$this->db->get();
        $result=$query->row();
        $id=$result->IdRegistrovani;
        
        $this->db->set("IdRegistrovani", $id);
        $this->db->set("Najbolji", "ne");
        $this->db->insert("student");
        
        return $result;
    }
    
    public function ispravanPassword($lozinka){
     /*   if ($this->korisnik->Password == $lozinka) {
            return TRUE;
        } else {
            return FALSE;
        }*/
        return password_verify($lozinka, $this->korisnik->Password);
    }
    
    public function proveriKorisnika(){
        $result=$this->db->where('IdRegistrovani', $this->korisnik->IdRegistrovani)->get('student');
        $student=$result->row();
        if ($student!=NULL) {
            return 's';
        } else {
            $result=$this->db->where('IdRegistrovani', $this->korisnik->IdRegistrovani)->get('admin');
            $admin=$result->row();
            if ($admin!=NULL) {
                return 'a';
            } else {
                return 'p';
            }
        }
    }
    
    public function insert_faq($p,$o){
        
        $this->db->set("Pitanje", $p);
        $this->db->set("Odgovor", $o);
        $this->db->insert("faq");
    }
    
    public function dohvati_sve_studente(){
        $this->db->where("r.IdRegistrovani=s.IdRegistrovani");
        $this->db->from('registrovani r,student s');
        
        $query=$this->db->get();
        $result=$query->result();//vraca niz studenata
        return $result;
    }
    
}
