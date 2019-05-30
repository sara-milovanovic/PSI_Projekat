<?php

/**
 * Klasa Profesor koja koja sluzi kao kontroler za vrstu korisnika: profesor 
 * 
 */
class Profesor extends CI_Controller{
    
    /**
     * Konstruktor klase Profeosr koji ukljucuje modele koji ce biti potrebni kao i vodi racuna o tome logovanju profesora na sistem
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelMaterijal");
        $this->load->model("ModelPitalica");
        $this->load->model("ModelStudent");
        $this->load->model("ModelOblasti");
        $this->load->model("ModelOcena");
        $this->load->model("ModelKomentari");
        $this->load->model("ModelFAQ");
        $this->load->library('session');
        if (($this->session->userdata('student')) != NULL) {
            redirect("Student");
        } elseif ($this->session->userdata('admin') != NULL) {
            redirect("Admin");
        }
        elseif ($this->session->userdata('profesor') == NULL) {
            redirect('Gost');
        }
    }
    
    /**
     * Autor:
     * Funkcija koja ucitava pocetnu stranicu koju profesor vidi kada se tek uloguje na sistem
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
        $podaci['username']=$this->session->userdata('profesor')->Username;
        $this->load->view("start_prof.php", $podaci);
    }
    
    /**
     * Autor:
     * Funkcija koja trenutno ulogovanog profesora izloguje sa sistema i redirektuje na gosta tj pocetnu stranu koju vidi gost
     * 
     * @param 
     * @return void
     */
    public function logout(){
        $this->session->unset_userdata("profesor");
        $this->session->sess_destroy();
        redirect("Gost");
    }
    
    /**
     * Autor:
     * Funkcija ucitava stranicu na kojoj profesor moze dodavati nova pitanja
     * Funkcija takodje ucitava ovu stranicu sa prikazon poruke o gresci
     * 
     * @param Strung $poruka, String $q, String $a1, String $a2, String $a3, String $a4
     * @return void
     */
    public function ucitaj_dodavanje_pitanja($poruka=null,$q=null,$a1=null,$a2=null,$a3=null,$a4=null){
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
        
         $podaci['username']=$this->session->userdata('profesor')->Username;
        
         $podaci['poruka']=$poruka;
         $podaci['q']=$q;
         $podaci['a1']=$a1;
         $podaci['a2']=$a2;
         $podaci['a3']=$a3;
         $podaci['a4']=$a4;
         $this->load->view("prof_add_question.php",$podaci);
        
    }
    
    /**
     * Autor:
     * Funkcija ucitava stranicu na kojoj profesor moze dodavati nove materijale
     * Funkcija takodje ucitava ovu stranicu sa prikazon poruke o gresci
     * 
     * @param Strung $poruka, String $mat
     * @return void
     */
    public function ucitaj_dodavanje_materijala($poruka=null,$mat=null){
        if($poruka!=null) $podaci['poruka']=$poruka.'!';
        else{
            $podaci['poruka']=$poruka;
        }
         $podaci['materijal']=$mat;
         $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
         $podaci['username']=$this->session->userdata('profesor')->Username;
         $this->load->view("prof_add_materials.php",$podaci);
        
    }
   
    /**
     * Autor:
     * Funkcija koja sluzi za dodavanje novih pitanja
     * Funkcija ucitava ovu stranicu sa prikazon poruke o gresci ili poruke o uspesnom dodavanju
     * 
     * @param
     * @return void
     */
    public function add_question(){
        
        $pitanje=$this->input->post('question');
        $oblast=$this->input->post('topic');
        $ans1=$this->input->post('ans1');
        $ans2=$this->input->post('ans2');
        $ans3=$this->input->post('ans3');
        $ans4=$this->input->post('ans4');
        
        $tip=$this->input->post('a');
        
        $niz=[];
        for($i=0;$i<4;$i++){
        
            $niz[$i]=0;
        
        }
        $checked= $this->input->post("c1");
        if( $checked=="on"){
              $niz[0]=1;
        }
        
        $checked= $this->input->post("c2");
        if( $checked=="on"){
              $niz[1]=1;
        }
        
        $checked= $this->input->post("c3");
        if( $checked=="on"){
              $niz[2]=1;
        }
        
        $checked= $this->input->post("c4");
        if( $checked=="on"){
              $niz[3]=1;
        }
      
        $this->form_validation->set_rules("question", "Question", "required");
        $this->form_validation->set_rules("ans1", "Answer 1", "required");
        $this->form_validation->set_message("required","Field {field} is required.");
        if ($this->form_validation->run()) {
            
            if($tip=="radio"){
                $n=0;
                if($ans1!="") $n++;
                if($ans2!="") $n++;
                if($ans3!="") $n++;
                if($ans4!="") $n++;
                if($n<2){
                    $poruka="You need to enter at least 2 answers";
                    $this->ucitaj_dodavanje_pitanja($poruka,$pitanje,$ans1,$ans2,$ans3,$ans4);
                }
                else{
                    $this->ModelPitalica->dodaj_radio_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4);
                }
            }
            elseif($tip=="checkbox"){
                
                $flag=0;
                for($i=0;$i<4;$i++){
        
                    if($niz[$i]!=0) $flag=1;

                }
                
                if($flag==0){
                    $poruka="You need to check at least 1 answer";
                    $this->ucitaj_dodavanje_pitanja($poruka,$pitanje,$ans1,$ans2,$ans3,$ans4);
                }
                else{
                    $n=0;
                    if($ans1!="") $n++;
                    if($ans2!="") $n++;
                    if($ans3!="") $n++;
                    if($ans4!="") $n++;
                    if($n<2){
                        $poruka="You need to enter at least 2 answers";
                        $this->ucitaj_dodavanje_pitanja($poruka,$pitanje,$ans1,$ans2,$ans3,$ans4);
                    }
                    else{

                        $this->ModelPitalica->dodaj_checkbox_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz);
                    }
                }
                
            }
            elseif($tip=="list"){
                $n=0;
                if($ans1!="") $n++;
                if($ans2!="") $n++;
                if($ans3!="") $n++;
                if($ans4!="") $n++;
                if($n<2){
                    $poruka="You need to enter at least 2 answers";
                    $this->ucitaj_dodavanje_pitanja($poruka,$pitanje,$ans1,$ans2,$ans3,$ans4);
                }
                else{
                    
                    $this->ModelPitalica->dodaj_list_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz);
                    
                }
                
            }
            elseif($tip=="Fill the box"){
                
                $this->ModelPitalica->dodaj_fill_pitanje($pitanje,$oblast,$ans1);
                
            }
            if(!isset($poruka)){
                $poruka="Question added!";
                $this->ucitaj_dodavanje_pitanja($poruka);
            }
        }
        else{
            $this->ucitaj_dodavanje_pitanja();
        } 
    }
    
    /**
     * Autor:
     * Funkcija koja sluzi za dodavanje novih materijala
     * Funkcija ucitava ovu stranicu sa prikazon poruke o gresci ili poruke o uspesnom dodavanju
     * 
     * @param
     * @return void
     */
    public function add_material(){
        
        $mat=$this->input->post('mat');
        $obl=$this->input->post('obl');
        
        
        $this->form_validation->set_rules("mat", "Material", "required");
        $this->form_validation->set_message("required","Field {field} is required.");
        if ($this->form_validation->run()) {
            
            $this->ModelMaterijal->dodaj_materijal($mat,$obl);
            
            $poruka="Material_waiting_for_approval!";
            redirect(base_url("index.php/Profesor/ucitaj_dodavanje_materijala/Material_waiting_for_approval"));   
            
        }
        else{
            $poruka="Material_waiting_for_approval!";
            redirect(base_url("index.php/Profesor/ucitaj_dodavanje_materijala/Fill_the_box"));   
        }        
    }
    
    /**
     * Autor:
     * Funkcija ucitava stranicu na kojoj profesor moze izabrati najboljeg ucenika meseca
     * 
     * @param
     * @return void
     */
    public function ucitaj_biranje_njaboljeg(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('profesor')->Username;
       $podaci['student']=$this->ModelStudent->dohvati_sve_sa_uspehom();
       $this->load->view("best_student.php",$podaci);
        
    }
    
    /**
     * Autor:
     * Funkcija koja poziva odgovarajuci model koji evidentira novog najboljeg ucenika meseca
     * Funkcija ponovo ucitava stranicu za biranje najboljeg
     * 
     * @param
     * @return void
     */
    public function proglasi_najboljeg($id){
        $this->ModelStudent->update_najboljeg($id);
        redirect(base_url("index.php/Profesor/ucitaj_biranje_njaboljeg"));
        
    }

    /**
     * Autor:
     * Funkcija poziva odgovarajuci model i ucitava stranicu za pregled cesto postavljanih pitanja
     * 
     * @param
     * @return void
     */
    public function ucitaj_faq(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('profesor')->Username;
       $faq_svi=$this->ModelFAQ->dohvati_sve_faq();
       $podaci['faq'] = $faq_svi;
       $this->load->view("faq_only_view_prof.php",$podaci);
    }
    
    /**
     * Autor:
     * Funkcija koja poziva odgovarajuci model i ucitava stranicu za prikaz materijala
     *  
     * @param
     * @return void
     */
    public function ucitaj_documents(){
        $poruka=$this->ModelOblasti->ucitaj_oblasti();
        if ($poruka) {
            $podaci['oblast'] = $poruka;
        }
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('profesor')->Username;
       $this->load->view("documents_prof.php",$podaci);
    }
    
    /**
     * Autor:
     * Funkcija poziva odgovarajuci model i ucitava stranicu za prikaz komentara o kursu 
     * 
     * @param
     * @return void
     */
    public function ucitaj_komentare(){
       $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
       $podaci['username']=$this->session->userdata('profesor')->Username;
       $komentari=$this->ModelKomentari->ucitaj_komentare();
       $podaci['komentari'] = $komentari;
       $this->load->view("write_comments_prof.php",$podaci);
        
    }
    
    /**
     * Autor:
     * Funkcija koja dohvata upisani komentar i poziva model koji komentar evidentira u bazi
     * Funkcija ucitava stranicu za pregled komentara
     * 
     * @param
     * @return void
     */
    public function dodaj_komentar(){
        
        $novi=$this->input->post('novi_komentar');
        $user=$this->session->userdata('profesor')->IdRegistrovani;
        $this->ModelKomentari->upisi_komentar($novi,$user);
        redirect(base_url("index.php/Profesor/ucitaj_komentare"));
    }
    
    /**
     * Autor:
     * Funkcija koja sluzi za prisanje zadatog komentara
     * Funkcija ucitava stranicu za prikaz komentara
     * 
     * @param int $id
     * @return void
     */
    public function brisi_komentar($id){
        
        $this->ModelKomentari->brisi_komentar($id);
        redirect(base_url("index.php/Profesor/ucitaj_komentare"));
      
    }
        
    /**
     * Autor:
     * Funkcija ucitava stranicu na kojoj profesor moze oceniti kurs
     * 
     * @param
     * @return void
     */
    public function ucitaj_rate(){
        $podaci['najbolji']=$this->ModelStudent->dohvati_najboljeg();
        $podaci['username']=$this->session->userdata('profesor')->Username;
        $this->load->view("prof_rate_app.php",$podaci);
        
    }

    /**
     * Autor:
     * Funkcija koja poziva model koji evidentira datu ocenu i ucitava stranicu na kojoj trenutno ulogovani profesor moze oceniti kurs
     * 
     * @param
     * @return void
     */
    public function oceni(){
        $id=$this->session->userdata('profesor')->IdRegistrovani;
        $ocena=$this->input->post('star');
        $this->ModelOcena->oceni($id,$ocena);
        redirect(base_url("index.php/Profesor/ucitaj_rate"));
        
    }
    
}
