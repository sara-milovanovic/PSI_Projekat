<?php

class Gost extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelKorisnik');
        $this->load->model('ModelKomentari');
        $this->load->model("ModelOblasti");
        $this->load->model("ModelOcena");
        $this->load->model("ModelFAQ");
        $this->load->model("ModelStudent");
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
    
    public function index($poruka=NULL){
        $poruka=$this->ModelOblasti->ucitaj_oblasti();
        $podaci=[];
        if ($poruka) {
            $podaci['oblasti'] = $poruka;
        }
        $podaci['ocena']=$this->ModelOcena->dohvati_ocenu();
        $this->load->view('start_unreg.php',$podaci);
        
    }
          
    //metoda koja ucitava formu za  logovanje
    public function login($poruka=NULL,$u=null)
    {  
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        $podaci['username']=$u;
        $this->load->view('login.php',$podaci);
    }
    
    public function signup_formValidation($poruka=NULL)
    {  
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        $this->load->view('SignUp.php',$podaci);
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
                $u=$this->input->post('username');
                $this->login("Wrong passoword!",$u);
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
                
            }
            
            
        } else {
         
            $this->login();
        }
    }
   
    
    
   public function ucitaj_login(){
       $this->load->view("login.php");
   }
   
   public function ucitaj_faq(){
       $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
       $podaci['faq'] = $faq_svi;
       $this->load->view("faq_only_view.php",$podaci);
    }
   
   public function ucitaj_komentare(){
       
       $podaci['komentari']=$this->ModelKomentari->ucitaj_komentare();
       $this->load->view("comments_only_view.php",$podaci);
   }
   
   public function ucitaj_signup(){
       $this->load->view("SignUp.php");
   }
   
    public function ucitaj_home(){
       $this->index();
   }
   
   public function signup(){
       
       $this->form_validation->set_rules("username", "Username", "required");
       $this->form_validation->set_rules("password", "Password", "required");
       $this->form_validation->set_rules("email", "Email", "required");
       $this->form_validation->set_message("required","Field {field} is required.");
       
      
       
       if ($this->form_validation->run()) {
         
           if ($this->ModelKorisnik->dohvatiUsernameSignup($this->input->post('username'))) {
                $this->signup_formValidation("Username already exist!");
              
            }
            else if ($this->ModelKorisnik->dohvatiMail($this->input->post('email'))) {
                $this->signup_formValidation("Your already signed up with this mail!");
              
            }
            else{
                $sifra=$this->input->post('password');
                $hash= password_hash($sifra, PASSWORD_DEFAULT);
                $korisnik=$this->ModelKorisnik->insert_korisnik($this->input->post('username'),$hash,$this->input->post('email'),$this->input->post('name'),$this->input->post('surname'));
                $this->session->set_userdata('student',$korisnik);
                redirect('Student');
            }
           
       }
       
       else {
         
            $this->signup_formValidation();
        }
       
       
   }
   
     public function posalji_mail(){
             $config = array();
             $config['protocol'] = 'smtp';
             $config['smtp_host'] = 'ssl://smtp.googlemail.com';
             $config['smtp_user'] = 'codewithzac@gmail.com';
             $config['smtp_pass'] = 'code_with_zac1';
             $config['smtp_port'] = 465;
             $config['charset'] = 'iso-8859-1';
             $config['mailtype'] = 'html';
             //extension=php_openssl.dll
             //ovde ide neki rand i uodate sifre za tog korisnika
             $pass= random_int(100000, 2500000);
             
             $email=$this->input->post('mail');
             $hash= password_hash($pass, PASSWORD_DEFAULT);
               
             $this->ModelStudent->update_sifre($email,$hash);
              
             
             $this->email->initialize($config);
             $this->email->set_newline("\r\n");
        
             $this->email->from('findeatsupp@gmail.com', 'CodeWithZacSupport');
             $this->email->to("$email");
             $this->email->subject("New password for CodeWithZac account");
             $this->email->message("<h2>Password: ".$pass."</h2>");
             
             $this->email->send();
             //var_dump($pass);
             
             redirect('Gost');
       
   }
   
   public function ucitaj_mail(){
       
       $this->load->view('mail.php');
       
   }
   
}
