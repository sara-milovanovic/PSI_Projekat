<?php

class Student extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelKomentari");
        $this->load->library('session');
        if (($this->session->userdata('profesor')) != NULL) {
            redirect("Profesor");
        } elseif ($this->session->userdata('admin') != NULL) {
            redirect("Admin");
        }
        elseif ($this->session->userdata('student') == NULL) {
            redirect('Gost');
        }
    }
   
    public function index(){
       
        //$this->prikazi("adminvesti.php",$podaci);
        $podaci['username']=$this->session->userdata('student')->Username;
       
        $this->load->view("start_reg.php", $podaci);
    }
    
    public function logout(){
        $this->session->unset_userdata("student");
        $this->session->sess_destroy();
        redirect("Gost");
    }
    
    public function ucitaj_infos(){
        $podaci['username']=$this->session->userdata('student')->Username;
        $podaci['password']=$this->session->userdata('student')->Password;
        $podaci['e_mail']=$this->session->userdata('student')->e_mail;
        $podaci['name']=$this->session->userdata('student')->Ime;
        $podaci['surname']=$this->session->userdata('student')->Prezime;
        $this->load->view("my_informations.php",$podaci);
    }
    
    public function ucitaj_change_infos($poruka=null){
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        $this->load->view("change_infos.php",$podaci);
        
    }
    
    public function promeni_informacije(){
        
        if($this->input->post('username')!=""){ $u=$this->input->post('username');}
        if($this->input->post('new_password')!="") $np=$this->input->post('new_password');
        if($this->input->post('retype_password')!="") $rp=$this->input->post('retype_password');
        if($this->input->post('name')!="") $n=$this->input->post('name');
        if($this->input->post('surname')!="") $s=$this->input->post('surname');
        
        if(isset($np) and (!isset($rp))){
            $poruka="Please fill all the * fields";
            $this->ucitaj_change_infos($poruka);
        }
        elseif($np!=$rp){
            $poruka="Passwords are not the same";
            $this->ucitaj_change_infos($poruka);
        }
        
        else{
           
                if(isset($u)) {
                    $this->db->set("Username", $u);
                }
                if(isset($np)) {
                    $this->db->set("Password", $np);
                }
                if(isset($n)) {
                    $this->db->set("Ime", $n);
                }
                if(isset($s)) {
                    $this->db->set("Prezime", $s);
                }
                $this->db->where("Username",$this->session->userdata('student')->Username);
                $this->db->update("registrovani");
               
                $this->ModelKorisnik->dohvatiKorisnika_id($this->session->userdata('student')->IdRegistrovani);
                $korisnik= $this->ModelKorisnik->korisnik;
                
                $this->session->unset_userdata("student");
                $this->session->set_userdata('student',$korisnik);
                
                $this->ucitaj_infos();
            
            
        }
        
    }
    
    public function ucitaj_komentare(){
        
       $komentari=$this->ModelKomentari->ucitaj_komentare();
       $podaci['komentari'] = $komentari;
       $this->load->view("write_comments.php",$podaci);
        
    }
    
    public function dodaj_komentar(){
        
        $novi=$this->input->post('novi_komentar');
        $user=$this->session->userdata('student')->IdRegistrovani;
        $this->ModelKomentari->upisi_komentar($novi,$user);
        $this->ucitaj_komentare();
    }
    
}
