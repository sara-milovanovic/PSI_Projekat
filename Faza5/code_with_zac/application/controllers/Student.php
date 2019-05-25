<?php

class Student extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelKomentari");
        $this->load->model("ModelMaterijal");
        $this->load->model("ModelOblasti");
        $this->load->model("ModelOcena");
        $this->load->model("ModelFAQ");
        $this->load->model("ModelStudent");
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
       $poruka=$this->ModelOblasti->ucitaj_oblasti();
        if ($poruka) {
            $podaci['oblasti'] = $poruka;
        }
        $podaci['ocena']=$this->ModelOcena->dohvati_ocenu();
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
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
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
        $podaci['username']=$this->session->userdata('student')->Username;
        $podaci['password']=$this->session->userdata('student')->Password;
        $podaci['e_mail']=$this->session->userdata('student')->e_mail;
        $podaci['name']=$this->session->userdata('student')->Ime;
        $podaci['surname']=$this->session->userdata('student')->Prezime;
        $podaci['oblasti']=$this->ModelOblasti->ucitaj_oblasti_sa_rez();
        $this->load->view("my_informations.php",$podaci);
    }
    
    public function ucitaj_change_infos($poruka=null){
        $podaci=[];
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
        
        $podaci['username']=$this->session->userdata('student')->Username;
        
        if ($poruka) {
            $podaci['poruka'] = $poruka;
        }
        //var_dump($podaci);
        $this->load->view("change_infos.php",$podaci);
        
    }
    
    public function promeni_informacije(){
        
        if($this->input->post('username')!=""){ $u=$this->input->post('username');}
        if($this->input->post('new_password')!="") $np=$this->input->post('new_password');
        if($this->input->post('retype_password')!="") $rp=$this->input->post('retype_password');
        if($this->input->post('name')!="") $n=$this->input->post('name');
        if($this->input->post('surname')!="") $s=$this->input->post('surname');
        
        if(isset($u) or isset($np) or isset($rp) or isset($n) or isset($s)){
            if(isset($np) and (!isset($rp))){
                $poruka="Please fill all the * fields";
                $this->ucitaj_change_infos($poruka);
            }
            elseif((isset($np)) and ($np!=$rp)){
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

                    redirect(base_url("index.php/Student/ucitaj_infos"));


            }
        
        }
        else{
            
            redirect(base_url("index.php/Student/ucitaj_change_infos"));
            
        }
        
    }
    
    public function ucitaj_komentare(){
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('student')->Username;
       
       $komentari=$this->ModelKomentari->ucitaj_komentare();
       $podaci['komentari'] = $komentari;
       $this->load->view("write_comments.php",$podaci);
        
    }
    
    public function dodaj_komentar(){
        
        $novi=$this->input->post('novi_komentar');
        $user=$this->session->userdata('student')->IdRegistrovani;
        $this->ModelKomentari->upisi_komentar($novi,$user);
        redirect(base_url("index.php/Student/ucitaj_komentare"));
        
    }
    
    public function brisi_komentar($id){
        
        $this->ModelKomentari->brisi_komentar($id);
        
        redirect(base_url("index.php/Student/ucitaj_komentare"));
        
        /*
        $novi=$this->input->post('novi_komentar');
        $user=$this->session->userdata('student')->IdRegistrovani;
        $this->ModelKomentari->upisi_komentar($novi,$user);
        $this->ucitaj_komentare();*/
    }
    
    public function ucitaj_faq(){
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('student')->Username;
       $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
       $podaci['faq'] = $faq_svi;
       $this->load->view("faq_only_view_student.php",$podaci);
    }
    
    public function ucitaj_documents(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('student')->Username;
       $podaci['oblast']=$this->ModelMaterijal->izlistaj_materijale();
       $this->load->view("documents_student.php",$podaci);
    }
    
 
    
    public function ucitaj_rate(){
         $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('student')->Username;
         $this->load->view("student_rate_app.php",$podaci);
        
    }
    
    public function oceni(){
        $id=$this->session->userdata('student')->IdRegistrovani;
        $ocena=$this->input->post('star');
        $this->ModelOcena->oceni($id,$ocena);
         redirect(base_url("index.php/Student/ucitaj_rate"));
        
    }
    
}
