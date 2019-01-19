<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces;
        
    class Unit {
    
        private $description;

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
            return $this;
        }
    
    }