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
    
    public function obrisivest($idvest){
        $this->ModelVest->obrisiVest($idvest);
        redirect("Admin/index");
    }

}
