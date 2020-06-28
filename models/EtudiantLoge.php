<?php

    class EtudiantNonLoge extends Etudiant{

        private $montant;

        public function getMontant(){

            return $this->montant;
        }

        public function setMontant($montant){

            $this->montant=$montant;
        }

        public function hydrate($row){

            $this->id= $row['id'];
            $this->email=     $row['email'];
            $this->telephone= $row['telephone'];
            $this->profil=    $row['profil'];
               
        }
        
    }