<?php

/**
 * Klasa Gost koja koja sluzi kao kontroler za vrstu korisnika: gost 
 * 
 */
class Gost extends CI_Controller{
    
    /**
     * Konstruktor klase Gost koji ukljucuje modele koji ce biti potrebni i vodi racuna o trentnom korisniku ulogovanom na sistem
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelKorisnik');
        $this->load->model('ModelKomentari');
        $this->load->model("ModelOblasti");
        $this->load->model("ModelOcena");
        $this->load->model("ModelFAQ");
        $this->load->model("ModelStudent");
        
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
     public function ucitaj_home(){
       $this->index();
   }
    
    /**
     * Autor:Sara Milovanović
     * Funkcija koja ucitava pocetnu stranicu koju gost vidi kada se tek uloguje na sistem
     * 
     * @param 
     * @return void
     */
    public function index($poruka=NULL){
        $poruka=$this->ModelOblasti->ucitaj_oblasti();
        $podaci=[];
        if ($poruka) {
            $podaci['oblasti'] = $poruka;
        }
        $podaci['ocena']=$this->ModelOcena->dohvati_ocenu();
        $this->load->view('start_unreg.php',$podaci);
        
    }
          
    /**
     * Autor:Sara Milovanović
     * Funkcija koja prikazuje formu za logovanje
     * 
     * @param String $poruka, String $u
     * @return void
     */
    public function login($poruka=NULL,$u=null)
    {  
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        $podaci['username']=$u;
        $this->load->view('login.php',$podaci);
    }
    
    /**
     * Autor:Sara Milovanović
     * Funkcija koja prikazuje formu za registraciju
     * 
     * @param String $poruka
     * @return void
     */
    public function signup_formValidation($poruka=NULL)
    {  
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        $this->load->view('SignUp.php',$podaci);
    }
    
    
    /**
     * Autor:Sara Milovanović
     * Funkcija koja se poziva klikom na submit dugme forme za logovanje i sluzi za proveru podataka za logovanje
     * 
     * @param 
     * @return void
     */
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
   
    /**
     * Autor:Iva Veljković
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu sa cesto postavljanim pitanjima
     * 
     * @param 
     * @return void
     */
   public function ucitaj_faq(){
       $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
       $podaci['faq'] = $faq_svi;
       $this->load->view("faq_only_view.php",$podaci);
    }
   
    /**
     * Autor:Sara Milovanović
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu sa komentarima
     * 
     * @param 
     * @return void
     */
    public function ucitaj_komentare(){
       
       $podaci['komentari']=$this->ModelKomentari->ucitaj_komentare();
       $this->load->view("comments_only_view.php",$podaci);
    }
   
   
    /**
     * Autor:Sara Milovanović
     * Funkcija koja se poziva klikom na submit dugme forme za registrovanje i sluzi za proveru podataka za registraciju
     * 
     * @param 
     * @return void
     */
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
   
    /**
     * Autor:Iva Veljković
     * Funkcija koja se poziva ukoliko korisnik zaboravi svoju sifru i pozivom ove f-je mu se na mail posalje njegova nova sifra
     * 
     * @param 
     * @return void
     */
     public function posalji_mail(){
             $config = array();
             $config['protocol'] = 'smtp';
             $config['smtp_host'] = 'ssl://smtp.googlemail.com';
             $config['smtp_user'] = 'codewithzac@gmail.com';
             $config['smtp_pass'] = 'code_with_zac1';
             $config['smtp_port'] = 465;
             $config['charset'] = 'iso-8859-1';
             $config['mailtype'] = 'html';
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
             
             redirect('Gost');
       
   }
   
   /**
     * Autor:Iva Veljković
     * Funkcija koja ucitava stranicu gde korisnik unosi svoj mail prilikom zaboravljanja sifre
     * 
     * @param 
     * @return void
     */
   public function ucitaj_mail(){
       
       $this->load->view('mail.php');
       
   }
   
}
