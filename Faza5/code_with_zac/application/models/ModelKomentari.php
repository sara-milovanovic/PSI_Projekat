<?php
/**
 * Klasa ModelKomentari koja sluzi za komunikaciju sa bazom u kontekstu rada sa korisnickim komentarima
 * 
 */
class ModelKomentari extends CI_Model{
    //put your code here
    
    /**
     * Autor:Nedeljko Jokić
     * Konstruktor klase ModelKomentari
     *  
     * @param
     * @return void
     */
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Autor:Nedeljko Jokić
     * Funkcija koja dohvata sve komentare iz baze i kao
     * rezultat vraca niz cesto komentara
     *  
     * @param
     * @return Object[]
     */
    
    
    public function ucitaj_komentare(){
        $this->db->where("k.IdRegistrovani=r.IdRegistrovani");
        $this->db->from('komentari k, registrovani r');
        $query=$this->db->get();
        $result=$query->result();//vraca niz komentara
        return $result;
    }
    
    
    /**
     * Autor:Nedeljko Jokić
     * Funkcija koja upisuje odgovarajuci komentar u bazu
     *  
     * @param
     * @return void
     */
    
    public function upisi_komentar($novi,$user){
        
        $this->db->set("Tekst", $novi);
        $this->db->set("IdRegistrovani", $user);
        $this->db->set("DatumVreme", date("Y-m-d"));
        $this->db->set("IdKurs", 1);
        $this->db->insert("komentari");
        
        
    }
    
    /**
     * Autor:Nedeljko Jokić
     * Funkcija koja brise komentar iz baze sa zadatim parametrom
     *  
     * @param
     * @return void
     */
    
    public function brisi_komentar($id){
        
       $this->db->where("IdKomentari",$id);
       $this->db->delete("komentari");
        
    }
}
