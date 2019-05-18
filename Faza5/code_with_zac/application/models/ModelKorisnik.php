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
    public function ispravanPassword($lozinka){
        if ($this->korisnik->Password == $lozinka) {
            return TRUE;
        } else {
            return FALSE;
        }
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
    
}
