<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces;
        
    class Unit {

        private $label;
        private $vlan;
    
        private $description;

        public function __construct(){
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
            return $this;
        }

        /**
         * @return \OpenNetworkTools\OpenConfig\Vlans
         */
        public function getVlan(){
            return $this->vlan;
        }

        public function setVlan($vlan){
            $this->vlan;
        }
    
    }