<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Korisnik
 *
 * @author Korisnik
 */
class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelStudent");
        $this->load->model("ModelMaterijal");
        $this->load->model("ModelFAQ");
        $this->load->library('session');
        if (($this->session->userdata('student')) != NULL) {
            redirect("Student");
        } elseif ($this->session->userdata('profesor') != NULL) {
            redirect("Profesor");
        }
        elseif ($this->session->userdata('admin') == NULL) {
            redirect('Gost');
        }
    }
    
    /*private function prikazi($glavniDeo,$podaci=[]){
        $podaci['autor']=$this->session->userdata('autor');
        $this->load->view("sablon/header_admin.php", $podaci);
        $this->load->view($glavniDeo, $podaci);
        $this->load->view("sablon/footer.php");
    }*/
    
    public function index(){
       
        //$this->prikazi("adminvesti.php",$podaci);
        $podaci['username']=$this->session->userdata('admin')->Username;
        $this->load->view("start_admin.php", $podaci);
    }
    
    public function logout(){
        $this->session->unset_userdata("admin");
        $this->session->sess_destroy();
        redirect("Gost");
    }
    
     public function ucitaj_faq(){
       $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
       $podaci['faq'] = $faq_svi;
       $this->load->view("admin_adding_faq.php",$podaci);
    }
   
 
   
     public function ucitaj_documents(){
       $this->load->view("documents.php");
    }
   
      public function ucitaj_show_users(){
       $studenti_svi=$this->ModelKorisnik->dohvati_sve_studente();
        $podaci['student'] = $studenti_svi;
        $this->load->view('admin_deleting_students.php',$podaci);
   }
   
     public function ucitaj_questions_waiting_for_approval(){
       $this->load->view("approving_questions.php");
   }
   
      public function ucitaj_documents_waiting_for_approval(){
       $podaci['materijali']=$this->ModelMaterijal->dohvati_sve();
       $this->load->view("app_materials.php",$podaci);
   }
   
   public function odobri_materijal($id){
       
      $res=$this->ModelMaterijal->dohvati_materijal($id);
      $res1=$res->IdOblast;
      $mat=$res->Tekst;
       $this->ModelMaterijal->obrisi_materijal($id);
       $this->ModelMaterijal->ubaci_odobren_materijal($res1,$mat);
       
       redirect(base_url("index.php/Admin/ucitaj_documents_waiting_for_approval"));
       
       
       //sredi ubacivanje i konkatenaciju sa materijal
   }
   
   public function ponisti_materijal($id){
       
       $this->ModelMaterijal->obrisi_materijal($id);
       redirect(base_url("index.php/Admin/ucitaj_documents_waiting_for_approval"));
   }
   
     public function ucitaj_view_comments(){
       $this->load->view("admin_comments.php");
   }
   
    public function ucitaj_rate_this_course(){
       $this->load->view("user_rate_app.php");
   }
   
    public function ucitaj_final_test(){
      //poziv fje koja dohvata pitalice
   }
   
   public function add_faq(){
       
       $this->form_validation->set_rules("pitanje", "Pitanje", "required");
       $this->form_validation->set_rules("odgovor", "Odgovor", "required");
       $this->form_validation->set_message("required","Field {field} is required.");
       
       if ($this->form_validation->run()) {
           
           $faq= $this->ModelKorisnik->insert_faq($this->input->post("pitanje"), $this->input->post("odgovor"));
           $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
           /*$korisnik=$this->ModelKorisnik->insert_korisnik($this->input->post('username'),$this->input->post('password'),$this->input->post('email'),$this->input->post('name'),$this->input->post('surname'));
           $this->session->set_userdata('student',$korisnik);
           redirect('Student');*/
           $this->add_faq_formValidation(null,$faq_svi);
       }
       
       else {
            $this->add_faq_formValidation();
        }
       
       
   }
   
   
   public function add_faq_formValidation($poruka=NULL,$faq=null){  
        $podaci=[];
        if ($poruka) {
            $podaci['poruka'] = $poruka;
           
        }
        
        
        if ($faq) {
             $podaci['faq'] = $faq;
           
        }
        
        
        
        $this->load->view('admin_adding_faq.php',$podaci);
    }
   
    public function delete_students(){
        $studenti_svi=$this->ModelKorisnik->dohvati_sve_studente();
        $podaci['student'] = $studenti_svi;
        $this->load->view('admin_deleting_students.php',$podaci);
    }
    
    
    public function obrisi($id){
        $this->ModelStudent->obrisi_studenta($id);
        redirect(base_url("index.php/Admin/ucitaj_show_users"));
    }
    
    
    
}
