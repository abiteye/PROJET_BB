<?php

    class GestionnaireController extends Controller{


        public  function __construct(){
            $this->folder="security";
            $this->layout="acceuil";
            $this->dao="EtudiantDao";
            $this->validator=new Validator();
          
        }

        public function index(){ 

            $this->view="defaut";
            $this->render();
        }

        public function  AddChambre(){

            $this->view="enregistrerChambre";
            $this->render();
            
        }
        public function AddEtudiant(){
            $this->view="enregistrerEtudiant";
            $this->render();
        }

        public function listerEtudiant(){

            $this->dao=new EtudiantDao();
            $liste= $this->dao->getEtudiant();
            return $liste;
           
        }

        public function GestionEtudiant(){
            $etudiant= $this->listerEtudiant();

            $this->view="gestionEtudiant";
            $this->data_view["etudiant"]=$etudiant;

            $this->render();
        }
        
        public function GestionChambre(){
            $this->view="gestionChambre";
            
            $this->render();
        }
        //fonctions permettant de lister les etudiants
        


        public function enregistrer(){

            if(isset($_POST['btn_save'])){

               extract($_POST);
               $this->dao = new ChambreDao();

                if($numDep==''){
                  $this->validator->isVide($numDep, 'numDep', 'Ce champ est obligatoire');
                }elseif($type==''){
                  $this->validator->isVide($type, 'type', 'Ce champ est obligatoire');
                }else{
                    if($this->validator->isValid()){

                        $numero= $this->AutomaticNumber($numDep);
                        $row = [
                            'numero' => $numero,
                            'numDep' => $numDep,
                            'type' => $type
                        ];
                        $chambre = new Chambre($row);
                        //var_dump($chambre);
                        //die();

                        $result= $this->dao->add($chambre);
                        if($result!=1){
                          echo "l'insetion a echoué";
                        }else{
                          echo "l'ajout est fait avec succes";
                        }

                        
                    }
                }
            }else{
                $this->data_view['error']= $this->validator->getErrors();
                $this->index();

            }
        }
        //generer automatiqument le numero
        public function AutomaticNumber($numDep){

            if(strlen($numDep) == 1){

                $result= '00'.$numDep;

            }elseif(strlen($numDep) == 2){

                $result = '0'.$numDep;
            }

            return $result.'-'.rand(1000, 9999);
        }
        
        
    }