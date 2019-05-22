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
class Profesor extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelPitalica");
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
    
    /*private function prikazi($glavniDeo,$podaci=[]){
        $podaci['autor']=$this->session->userdata('autor');
        $this->load->view("sablon/header_admin.php", $podaci);
        $this->load->view($glavniDeo, $podaci);
        $this->load->view("sablon/footer.php");
    }*/
    
    public function index(){
       
        //$this->prikazi("adminvesti.php",$podaci);
        $podaci['username']=$this->session->userdata('profesor')->Username;
        $this->load->view("start_prof.php", $podaci);
    }
    
    public function logout(){
        $this->session->unset_userdata("profesor");
        $this->session->sess_destroy();
        redirect("Gost");
    }
    
    public function ucitaj_dodavanje_pitanja($poruka=null){
         $podaci['poruka']=$poruka;
         $this->load->view("prof_add_question.php",$podaci);
        
    }
   
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
        //var_dump($niz);
         
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
      
      
        var_dump($niz);
        $this->form_validation->set_rules("question", "Question", "required");
        $this->form_validation->set_rules("ans1", "Answer 1", "required");
        $this->form_validation->set_message("required","Field {field} is required.");
        if ($this->form_validation->run()) {
            
            if($tip=="radio"){
                $this->ModelPitalica->dodaj_radio_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4);
                
            }
            elseif($tip=="checkbox"){
                
                $flag=0;
                for($i=0;$i<4;$i++){
        
                    if($niz[$i]!=0) $flag=1;

                }
                
                if($flag==0){
                    $poruka="You need to check at least 1 answer";
                    $this->ucitaj_dodavanje_pitanja($poruka);
                }
                else{
                    
                    $this->ModelPitalica->dodaj_checkbox_pitanje($pitanje,$oblast,$ans1,$ans2,$ans3,$ans4,$niz);
                    
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
                    $this->ucitaj_dodavanje_pitanja($poruka);
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

}
