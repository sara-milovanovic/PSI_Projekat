<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Korisnik extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    /*public function __construct() {
        parent::__construct();
        $this->load->model("ModelVest");//ucitavaju se php fajlovi gde se nalase ovi modeli i pravi se instanca modela
        $this->load->model("ModelAutor");// kako su nam oba modela trebala u svim kontrolerima 
        //mogli smo i u autoload falju da ih dodamo u niz za modele
        
        //provera da li je korisnik pokusao nelegalno da pristupi kao Autor
        if (($this->session->userdata('autor')) == NULL) {
            redirect("Gost"); //u slucaju da nije ulogovan, poziva se izvrsavanje ispocetka,
            // ali za kontroler Gost i njegovu podrazumevanu metodu (index)
        } elseif ($this->session->userdata('autor')->admin == 1) {
            redirect("Admin"); //u slucaju da je ulogovan admin, poziva se izvrsavanje ispocetka,
            // ali za kontroler Admin i njegovu podrazumevanu metodu (index)
            
        }
    }*/
    /*
    //pomocna metoda koja sluzi za ucitavanje stranice posto nam se svaka stranica sadrzi iz tri dela
    private function prikazi($glavniDeo,$podaci=[]){
        $podaci['autor']=$this->session->userdata('autor');
        $this->load->view("sablon/header_korisnik.php", $podaci);
        $this->load->view($glavniDeo, $podaci);
        $this->load->view("sablon/footer.php");
    }
    
    //metoda koja se sluza za ucitavanje svih vesti
    public function index($trazi=NULL){
        $podaci=[];
        if ($trazi == NULL) {
            $podaci['vesti'] = $this->ModelVest->dohvatiVesti();
        } else {
            $podaci['vesti'] = $this->ModelVest->pretraga($trazi);
        }
        $podaci['controller']="Korisnik";
        $this->prikazi( "vesti.php",$podaci);  
        //view vest se ucitava iz kontrolera Korisnik i Gost
        //treba voditi racuna o tome da pozove ispravni kontroler prilikom pretrage kooja se nalazi na toj stranici
        //to nam omogucala element niza $podaci['controller']  
    }
    // metoda koja se poziva prilikom pretrage
    public function pretraga(){
        $trazi=$this->input->get('pretraga');
        $this->index($trazi);
    }
    
    //metoda koja ucitava formu za dodavanje vesti
    public function dodajvest(){
        $this->prikazi("dodavanjevesti.php");
    }

    //metoda koja se poziva klikom na submit forme za dodavanje vesti
    public function dodavanjeVesti(){
        //ovde je koriscena pomocna klasa radi lakse provere ispravnosti unetih podataka u formu 
        $this->form_validation->set_rules('naziv','Naziv', 'required|min_length[10]|max_length[20]');
        $this->form_validation->set_rules('sadrzaj','Sadrzaj','required');
        if($this->form_validation->run()==FALSE){
            //neispravni podaci
            $this->dodajvest();// ne treba redirect jer na refresh treba da proba da opet nesto doda
        }
        else{
            //ispravni podaci
            $naslov=$this->input->post("naziv");
            $sadrzaj=$this->input->post("sadrzaj");
            $autorId=$this->session->userdata("autor")->id;
            $this->ModelVest->dodaj($naslov, $sadrzaj,$autorId);
            redirect("Korisnik/index");
        }
    }
    
    
    
    public function logout(){
        $this->session->unset_userdata("autor");// brise se podatak o autoru iz sesije
        $this->session->sess_destroy(); //brise se sesija
        redirect("Gost");//kako vise nije ulogovan, treba da se ponasa kao sto je definisano u kontroleru gost
    }

    //metoda za prikaz mojih vesti
    public function mojevesti(){
        $idAutor=$this->session->userdata("autor")->korisnicko_ime;
        $vesti=$this->ModelVest->dohvatiVesti($idAutor);
        $podaci['vesti']=$vesti;
        $this->prikazi("mojevesti.php",$podaci);
    }
    
    //metoda za prikaz stranice za izmenu vesti
    public function izmenivest($idvesti){
        $vest=$this->ModelVest->dohvatiVest($idvesti);
        $this->prikazi("izmenavesti.php",['vest'=>$vest]);
    }

    //metoda koja se poziva prilikom klika na submit forme za izmenu vesti
    //u njoj se prvo proverava ispravnost unetih podataka a zatim i menaju podaci ako su ispravni
    public function menjajvest($idVest){
        $this->form_validation->set_rules('naslov','Naslov','required|min_length[10]|max_length[20]');
        $this->form_validation->set_rules('sadrzaj','Sadrzaj','required');
        if($this->form_validation->run()==FALSE){
            $this->izmenivest($idVest);// ne treba redirect jer na refresh treba da proba da opet nesto doda
        }
        else{
            //ispravno
            $naslov=$this->input->post("naslov");
            $sadrzaj=$this->input->post("sadrzaj");
            $autorId=$this->session->userdata("autor")->id;
            $this->ModelVest->izmeniVest($idVest, $naslov, $sadrzaj,$autorId);

            redirect("Korisnik/mojevesti");
        }
    }
    
    //metoda za brisanje vesti
    public function obrisivest($idvest){
        $autorId=$this->session->userdata("autor")->id;
        $this->ModelVest->obrisiVest($idvest,$autorId);
        redirect("Korisnik/mojevesti");
    }

    //metoda za prikaz jedne vesti
    public function prikazivest($id){
        $this->prikazi("vestprikaz.php", ["vest"=>$this->ModelVest->dohvatiVest($id)]);
    }*/
    
    
}
