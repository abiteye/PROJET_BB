<?php

    class ChambreDao extends Manager{


        public function __construct(){

            $this->tableName='chambre';
            $this->className='Chambre';
            $this->colonne='id_chambre';
        }

        public function add($obj){
            
            $numero = $obj->getNumero();
            $NumDep = $obj->getNumDep();
            $type =   $obj->getType();
            $sql = "INSERT INTO chambre(numero, numDep, type) 
                    VALUES ('$numero', '$NumDep', '$type')";
            $data = $this->executeUpdate($sql);

            return $data;

        }
        

        public function update($obj){

        }

        public function delete($id){

        }
        public function select(){
            $sql = "select * from Chambre";

            $data = $this->executeSelect($sql);
            echo '<pre>';
            //var_dump($data);
            echo '</pre>';

            
        }
    }