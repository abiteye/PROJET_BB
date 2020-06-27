<?php

    class GestionnaireController extends Controller{


        public  function __construct(){
            $this->folder="security";
            $this->layout="acceuil";
            $this->validator=new Validator();
          
        }

        public function index(){ 

            $this->view="defaut";
            $this->render();
        }

        public function  AddchambreController(){

            $this->view="enregistrerChambre";
            $this->render();
            
        }
        public function GestionetudiantController(){
            $this->view="gestionEtudiant";
            $this->render();
        }
        public function GestionchambreController(){
            $this->view="gestionChambre";
            $this->render();
        }
        public function EnregistreretudiantController(){
            $this->view="enregistrerEtudiant";
            $this->render();
        }
        
        
    }