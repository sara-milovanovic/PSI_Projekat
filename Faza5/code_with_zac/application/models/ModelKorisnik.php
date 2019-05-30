<?php

/**
 * Klasa ModelKorisnik koja sluzi za komunikaciju sa bazom u kontekstu rada sa korisnickim nalogom i registrovanim korisnicima
 * 
 */
class ModelKorisnik extends CI_Model {
    public $korisnik;
    
    /**
     * Autor:
     * Konstruktor klase ModelKorisnik
     * 
     * @param
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->korisnik=NULL;
    }
    
    /**
     * Autor:
     * Funkcija koja vraca true ako korisnik sa zadatim korisnickim imenom postoji, a u suprotnom vraca false
     * 
     * @param String $korisnicko_ime
     * @return boolean
     */
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
    
    /**
     * Autor:
     * Funkcija koja vraca true ako korisnik sa id-jem postoji, a u suprotnom vraca false
     * 
     * @param int $id
     * @return boolean
     */
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
    
    /**
     * Autor:
     * Funkcija koja vraca true ako korisnik sa zadatim korisnicki imenom postoji, a u suprotnom vraca false
     * 
     * @param String $korisnicko_ime
     * @return boolean
     */
    public function dohvatiUsernameSignup($korisnicko_ime){
        $result=$this->db->where('Username',$korisnicko_ime)->get('registrovani');
        $korisnik=$result->row();
        if ($korisnik!=NULL) {
            
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
     * Autor:
     * Funkcija koja vraca true ako korisnik sa zadatim mail-om postoji, a u suprotnom vraca false
     * 
     * @param String $mail
     * @return boolean
     */
    public function dohvatiMail($mail){
        $result=$this->db->where('e_mail',$mail)->get('registrovani');
        $korisnik=$result->row();
        if ($korisnik!=NULL) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
     * Autor:
     * Funkcija koja u bazu ubacuje novog korisnika sa zadatim username-om, password-om, mail-om, imenom i prezimenom respektivno i vraca ubacenog korisnika
     * 
     * 
     * @param String $u, String $p, String $m, String $n, String $s
     * @return Object
     */
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
    
    /**
     * Autor:
     * Funkcija koja proverava da li je uneti password validan
     * 
     * @param String $lozinka
     * @return int
     */
    public function ispravanPassword($lozinka){
        return password_verify($lozinka, $this->korisnik->Password);
    }
    
    /**
     * Autor:
     * Funkcija koja proverava da li je trenutno ulogovani korisnik student, admin ili profesor
     * 
     * @param
     * @return char
     */
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
    
    /**
     * Autor:
     * Funkcija koja u bazu insertuje cesto postavljano pitanje i odgovor na njega 
     * 
     * @param String $p, String $o
     * @return void
     */
    public function insert_faq($p,$o){
        $this->db->set("Pitanje", $p);
        $this->db->set("Odgovor", $o);
        $this->db->insert("faq");
    }
    
    /**
     * Autor:
     * Funkcija koja vraca niz svih studenata registrovanih na sistem
     * 
     * @param
     * @return Object[]
     */
    public function dohvati_sve_studente(){
        $this->db->where("r.IdRegistrovani=s.IdRegistrovani");
        $this->db->from('registrovani r,student s');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
}
