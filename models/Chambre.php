<?php

    class Chambre implements IApplication{

        protected $id;
        protected $numero;
        protected $numDep;
        protected $type;


        //Le constructeur

        public function __construct($row=null){

            if($row!=null){
                $this->hydrate($row);
            }

        }
        
        public function hydrate($row){

            $this->numero= $row['numero'];
            $this->numDep= $row['numDep'];
            $this->type=   $row['type'];
               
        }

        public function getIdChambre(){

            return $this->id_chambre;
        }
        
        public function getNumero(){

            return $this->numero;
        }

        public function getNumDep(){

            return $this->numDep;
        }

        public function getType(){

            return $this->type;
        }

        //les setters
        public function setIdChambre($id_chambre){

            $this->id_chambre=$id_chambre;
        }

        public function setNumero($numero){

            $this->numero=$numero;
        }

        public function setNumDep($numDep){

            $this->numDep=$numDep;
        }

        public function setType($type){

            $this->type=$type;
        }
    }