<?php
    namespace OpenNetworkTools;
        
    class OpenConfig implements \OpenNetworkTools\Interfaces\OpenConfigInterfaces {
    
        private $interfaces;
        private $system;
        private $vlans;

        public function __construct(){
            $this->system = new \OpenNetworkTools\OpenConfig\System();
        }

        public function addInterfaces($label){
            if(!@is_object($this->interfaces[$label])) $this->interfaces[$label] = new \OpenNetworkTools\OpenConfig\Interfaces();
            return $this->interfaces[$label];
        }

        public function copyInterfaces($label_source, $label_dest){
        }

        public function deleteInterfaces($label = NULL){
        }

        public function getInterfaces($label = NULL){
            if(!is_null($label)) return $this->interfaces[$label];
            else return $this->interfaces;
        }

        public function replaceInterfaces($label_source, $label_dest){
        }

        public function setInterfaces($interface, $label = NULL){
        }

        public function getProtocols(){
        }

        public function setProtocols($protocols){
        }

        public function restoreProtocols(){
        }

        public function getSystem(){
        }

        public function setSystem($system){
        }

        public function restoreSystem(){
        }

        public function addVlans($label){
        }

        public function copyVlans($label_source, $label_dest){
        }

        public function deleteVlans($label = NULL){
        }

        public function getVlans($label = NULL){
        }

        public function replaceVlans($label_source, $label_dest){
        }

        public function setVlans($vlan, $label = NULL){
        }


    }