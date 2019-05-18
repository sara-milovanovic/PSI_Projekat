<?php

class Gost extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelKorisnik');
   //ucitavaju se php fajlovi gde se nalase ovi modeli i pravi se instanca modela
      // kako su nam oba modela trebala u svim kontrolerima 
        //mogli smo i u autoload falju da ih dodamo u niz za modele
        
        //provera da li je korisnik mozda vec ulogovan
        if (($this->session->userdata('admin')) != NULL) {
            redirect('Admin');
        }
        elseif (($this->session->userdata('student')) != NULL) {
            redirect('Student');
        }
        elseif (($this->session->userdata('profesor')) != NULL) {
            redirect('Profesor');
        }
    }
        
    //pomocna metoda koja sluzi za ucitavanje stranice posto nam se svaka stranica sadrzi iz tri dela
    private function prikazi($glavniDeo, $data){
        $this->load->view("sablon/header_gost.php", $data);
        $this->load->view($glavniDeo, $data);
        $this->load->view("sablon/footer.php");
    }
    
    public function index($trazi=NULL){
        $this->load->view('start_unreg.php');
        //view vest se ucitava iz kontrolera Korisnik i Gost
        //treba voditi racuna o tome da pozove ispravni kontroler prilikom pretrage kooja se nalazi na toj stranici
        //to nam omogucala element niza $podaci['controller'] 
    }
    
    // metoda koja se poziva prilikom pretrage
    public function pretraga(){
        $trazi=$this->input->get('pretraga');
        $this->index($trazi);
    }
     
    //informacije o svim autorima u sistemu
    public function  autori(){
        $podaci['autori']= $this->ModelAutor->dohvatiAutore();
        $this->prikazi("autori.php",$podaci);     
    }
          
    //metoda koja ucitava formu za  logovanje
    public function login($poruka=NULL)
    {  
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        $this->load->view('login.php',$podaci);
    }
    
    //metoda koja se poziva klikom na submit forme za logovanje
    public function ulogujse(){
        
      
        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_message("required","Field {field} is required.");
        if ($this->form_validation->run()) {
           
            if (!$this->ModelKorisnik->dohvatiKorisnika($this->input->post('username'))) {
                $this->login("Wrong username!");
              
            } else if (!$this->ModelKorisnik->ispravanPassword($this->input->post('password'))) {
            
                $this->login("Wrong passoword!");
            } else {
                $korisnik= $this->ModelKorisnik->korisnik;
                $c=$this->ModelKorisnik->proveriKorisnika();
                switch ($c) {
                    case 'a':
                        $this->session->set_userdata('admin',$korisnik);
                        redirect('Admin');
                        break;
                    case 's':
                        $this->session->set_userdata('student',$korisnik);
                        redirect('Student');
                        break;
                    case 'p':
                        $this->session->set_userdata('profesor',$korisnik);
                        redirect('Profesor');
                        break;
                }
                /*$autor=$this->ModelAutor->autor;
                $this->session->set_userdata('autor',$autor);
                if($autor->admin == 0){
                    redirect("Korisnik");
                } else {
                    redirect("Admin");
                }*/
            }
        } else {
         
            $this->login();
        }
    }
    
   public function ucitaj_login(){
       $this->load->view("login.php");
   }
   
   public function ucitaj_faq(){
       $this->load->view("faq_only_view.php");
   }
   
   public function ucitaj_komentare(){
       $this->load->view("comments_only_view.php");
   }
   
   public function ucitaj_signup(){
       $this->load->view("SignUp.php");
   }
   
}
