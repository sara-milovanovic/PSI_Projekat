<?php

/**
 * Klasa Admin koja koja sluzi kao kontroler za vrstu korisnika: admin 
 * 
 */
class Admin extends CI_Controller{
    /**
     * Konstruktor klase Admin koji ukljucuje modele koji ce biti potrebni i vodi racuna o logovanju admina na sistem
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelOblasti");
        $this->load->model("ModelOcena");
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelStudent");
        $this->load->model("ModelMaterijal");
        $this->load->model("ModelKomentari");
        $this->load->model("ModelPitalica");
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
    
    /**
     * Autor:Nedeljko Jokić
     * Funkcija koja dohvata upisani komentar i poziva model koji komentar evidentira u bazi
     * Funkcija ucitava stranicu za pregled komentara
     * 
     * @param
     * @return void
     */
    
    public function dodaj_komentar(){
        
        $novi=$this->input->post('novi_komentar');
        $user=$this->session->userdata('admin')->IdRegistrovani;
        $this->ModelKomentari->upisi_komentar($novi,$user);
        redirect(base_url("index.php/Admin/ucitaj_komentare"));

    }
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja ucitava pocetnu stranicu koju admin vidi kada se tek uloguje na sistem
     * 
     * @param 
     * @return void
     */
    
    public function index(){
        $poruka=$this->ModelOblasti->ucitaj_oblasti();
        if ($poruka) {
            $podaci['oblasti'] = $poruka;
        }
        $podaci['ocena']=$this->ModelOcena->dohvati_ocenu();
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
        //$this->prikazi("adminvesti.php",$podaci);
        $podaci['username']=$this->session->userdata('admin')->Username;
        $this->load->view("start_admin.php", $podaci);
    }
    
    /**
     * Autor:Nedeljko Jokić
     * Funkcija koja trenutno ulogovanog admina izloguje sa sistema i redirektuje na gosta tj pocetnu stranu koju vidi gost
     * 
     * @param 
     * @return void
     */
    
    
    public function logout(){
        $this->session->unset_userdata("admin");
        $this->session->sess_destroy();
        redirect("Gost");
    }
    
    
    /**
     * Autor:Iva Veljković
     * Funkcija poziva odgovarajuci model i ucitava stranicu za pregled i dodavanje cesto postavljanih pitanja
     * koja se evidentiraju u bazi
     * 
     * @param
     * @return void
     */
      
     public function ucitaj_faq(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('admin')->Username;
       $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
       $podaci['faq'] = $faq_svi;
       $this->load->view("admin_adding_faq.php",$podaci);
    }
   
    /**
     * Autor:Sara Milovanović
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu za prikaz materijala
     *  
     * @param
     * @return void
     */
   
     public function ucitaj_documents(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('admin')->Username;
       $podaci['oblast']=$this->ModelMaterijal->izlistaj_materijale();
       $this->load->view("documents_admin.php",$podaci);
    }
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu za pregled studenata, gde admin
     * ima mogucnost da obrise studente koji narusavaju pravila kursa
     *  
     * @param
     * @return void
     */
    
      public function ucitaj_show_users(){
       $studenti_svi=$this->ModelKorisnik->dohvati_sve_studente();
        $podaci['student'] = $studenti_svi;
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('admin')->Username;
        $this->load->view('admin_deleting_students.php',$podaci);
   }
   
   /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu na kojoj
     * admin moze da odobri ili odbije pitanja koja je neki profesor napravio
     *  
     * @param
     * @return void
     */
   
     public function ucitaj_questions_waiting_for_approval(){
      $podaci['pitalice']= $this->ModelPitalica->dohvati_pitalicu_na_cekanju();
      $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
      $podaci['username']=$this->session->userdata('admin')->Username;
      $this->load->view('approving_questions.php',$podaci);
   }
   
   /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu na kojoj
     * admin moze da odobri ili odbije pitanja koja je neki profesor napravio
     *  
     * @param
     * @return void
     */
   
      public function ucitaj_documents_waiting_for_approval(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('admin')->Username;
       $podaci['materijali']=$this->ModelMaterijal->dohvati_sve();
       $this->load->view("app_materials.php",$podaci);
   }
   
   /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model pomocu kog admin odobrava materijal
     * Nakon sto admin odobri materijal, on se evidentira u bazi, a brise se iz tabele u bazi 
     * koja sadrzi materijale na cekanju
     *  
     * @param
     * @return void
     */
   
   public function odobri_materijal($id){
       
      $res=$this->ModelMaterijal->dohvati_materijal($id);
      $res1=$res->IdOblast;
      $mat=$res->Tekst;
       $this->ModelMaterijal->obrisi_materijal($id);
       $this->ModelMaterijal->ubaci_odobren_materijal($res1,$mat);
       
       redirect(base_url("index.php/Admin/ucitaj_documents_waiting_for_approval"));
       
   
   }
   
   /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model pomocu kog admin ne odobrava materijal
     * Nakon sto admin ne odobri materijal, on se brise se iz tabele u bazi 
     * koja sadrzi materijale na cekanju
     *  
     * @param
     * @return void
     */
   
   
   public function ponisti_materijal($id){
       
       $this->ModelMaterijal->obrisi_materijal($id);
       redirect(base_url("index.php/Admin/ucitaj_documents_waiting_for_approval"));
   }
   
   /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model pomocu kog admin odobrava pitalicu
     * Nakon sto admin odobri pitalicu, ona se evidentira u bazi, a brise se iz tabele u bazi 
     * koja sadrzi pitalice na cekanju
     *  
     * @param
     * @return void
     */
   
   
   public function odobri_pitalicu($id){
       
      $res=$this->ModelPitalica->odobri_pitalicu($id);
      redirect(base_url("index.php/Admin/ucitaj_questions_waiting_for_approval"));
       
       //sredi ubacivanje i konkatenaciju sa materijal
   }
   
   
   /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model pomocu kog admin ne odobrava pitalicu
     * Nakon sto admin ne odobri pitalicu, on se brise se iz tabele u bazi 
     * koja sadrzi pitalice na cekanju
     *  
     * @param
     * @return void
     */
   
   public function ponisti_pitalicu($id){
       $res=$this->ModelPitalica->ponisti_pitalicu($id);
      redirect(base_url("index.php/Admin/ucitaj_questions_waiting_for_approval"));
       
   }
   
   /**
     * Autor:Iva Veljković
     * Funkcija poziva odgovarajuci model i ucitava stranicu za prikaz i brisanje komentara o kursu 
     * 
     * @param
     * @return void
     */
   
     public function ucitaj_view_comments(){
       $this->load->view("admin_comments.php");
   }
   
   
   
   /**
     * Autor:Iva Veljković
     * Funkcija koja poziva odgovarajuci model pomocu kog admin dodaje 
     * cesto postavljena pitanja. Nakon sto admin doda pitanje ono se 
     * evidentira u bazi  
     *  
     * @param
     * @return void
     */
   
   public function add_faq(){
       
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('admin')->Username;
       
       $this->form_validation->set_rules("pitanje", "Question", "required");
       $this->form_validation->set_rules("odgovor", "Answer", "required");
       $this->form_validation->set_message("required","Field {field} is required.");
       
       if ($this->form_validation->run()) {
           
           $faq= $this->ModelKorisnik->insert_faq($this->input->post("pitanje"), $this->input->post("odgovor"));
           $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
           /*$korisnik=$this->ModelKorisnik->insert_korisnik($this->input->post('username'),$this->input->post('password'),$this->input->post('email'),$this->input->post('name'),$this->input->post('surname'));
           $this->session->set_userdata('student',$korisnik);
           redirect('Student');*/
           $this->add_faq_formValidation(null,$faq_svi,$podaci);
       }
       
       else {
            $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
            $this->add_faq_formValidation(null,$faq_svi,$podaci);
        }
       
       
   }
   
   /**
     * Autor:Iva Veljković
     * Funkcija koja proverava da li su dobri podaci uneti u formu i u slucaju
     * da nisu ispisuje odgovarajucu gresku
     *  
     * @param
     * @return void
     */
   
   public function add_faq_formValidation($poruka=NULL,$faq=null,$podaci=null){  
        
        if ($poruka) {
            $podaci['poruka'] = $poruka;
           
        }
        
        
        if ($faq) {
             $podaci['faq'] = $faq;
           
        }
        
        
        
        $this->load->view('admin_adding_faq.php',$podaci);
    }
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja poziva odgovarajuci model koji ucitava stranicu 
     * na kojoj admin vidi sve studente koji su na kursu i moze da ih obrise
     *  
     * @param
     * @return void
     */
    
    public function delete_students(){
        $studenti_svi=$this->ModelKorisnik->dohvati_sve_studente();
        $podaci['student'] = $studenti_svi;
        $this->load->view('admin_deleting_students.php',$podaci);
    }
    
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja poziva odgovarajuci model pomocu kog  administrator brise studente koji krse pravila
     * kursa. Nakon sto ih administrator obrise oni se brisu i iz baze
     *  
     * @param
     * @return void
     */
    
    public function obrisi($id){
        $this->ModelStudent->obrisi_studenta($id);
        redirect(base_url("index.php/Admin/ucitaj_show_users"));
    }
    
    
    /**
     * Autor:Nedeljko Jokić
     * Funkcija koja poziva odgovarajuci model pomocu kog administrator brise komentare koji krse pravila
     * kursa. Nakon sto ih administrator obrise oni se brisu i iz baze
     *  
     * @param
     * @return void
     */
    
    
     public function brisi_komentar($id){
        
        $this->ModelKomentari->brisi_komentar($id);
        redirect(base_url("index.php/Admin/ucitaj_komentare"));
      
    }
    
    /**
     * Autor:Iva Veljković
     * Funkcija koja poziva odgovarajuci model koji ucitava stranicu sa svim komentarima
     *  
     * @param
     * @return void
     */
    
      public function ucitaj_komentare(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('admin')->Username;
       $komentari=$this->ModelKomentari->ucitaj_komentare();
       $podaci['komentari'] = $komentari;
       $this->load->view("admin_comments.php",$podaci);
        
    }
    
}
