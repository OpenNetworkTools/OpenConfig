<?php
namespace OpenNetworkTools\Interfaces\OpenConfig;
        
    interface VlansInterfaces {

        public function __construct();
        public function getDescription();
        public function setDescription($description);
        public function getRoutingInterface();
        public function setRoutingInterfaces($unit, $interface = "irb");
        public function deleteRoutingInterfaces();
        public function getVlanId();
        public function setVlanId($id);
    
    }