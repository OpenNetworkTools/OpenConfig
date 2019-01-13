<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class Vlans implements \OpenNetworkTools\Interfaces\OpenConfig\VlansInterfaces {

        private $description;
        private $routingInterfaces;
        private $vlanID;

        public function __construct(){
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
            return $this->description;
        }

        public function getRoutingInterface(){
        }

        public function setRoutingInterfaces($unit, $interface = "irb"){
        }

        public function deleteRoutingInterfaces(){
        }

        public function getVlanId(){
            return $this->vlanID;
        }

        public function setVlanId($id){
            $this->vlanID = $id;
            return $this;
        }

    }