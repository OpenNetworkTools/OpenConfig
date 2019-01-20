<?php
    namespace OpenNetworkTools\OpenConfig\Vlans;
        
    class PortMstpRstp {

        private $instance;
        private $type = "port-mstprstp";
    
        public function __construct(){
        }

        public function getInstance(){
            return $this->instance;
        }

        public function setInstance($instance){
            $this->instance = $instance;
            return $this;
        }

        public function getType(){
            return $this->type;
        }

    }