<?php

    class EtudiantDao  extends Manager {


        public function __construct(){

            $this->tableName='etudiant';
            $this->className='Etudiant';
        }

        public function add($obj){

        }

        public function getEtudiant(){

            return $this->findAll();

        }

        public function upddate($id){

        }
       

        
        
        
        
    }