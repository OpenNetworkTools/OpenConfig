<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class Interfaces  implements \OpenNetworkTools\Interfaces\OpenConfig\InterfacesInterfaces {
    
        private $description;
        private $disable;

        public function __construct(){
        }

        public function getDescription(){
        }

        public function setDescription($description){
        }

        public function getDisable(){
        }

        public function setDisable(){
        }

        public function deleteDisable(){
        }

        public function addUnit($id){
        }

        public function copyUnit($id_source, $id_dest){
        }

        public function deleteUnit($id){
        }

        public function getUnit($id = NULL){
        }

        public function replaceUnit($id_source, $id_dest){
        }

        public function setUnit($unit, $id = NULL){
        }


    }