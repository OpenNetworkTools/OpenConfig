<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class System implements \OpenNetworkTools\Interfaces\OpenConfig\SystemInterfaces {
    
        private $hostname;
        private $timezone;

        public function __construct(){
        }

        public function getHostName(){
            // TODO: Implement getHostName() method.
        }

        public function setHostName($hostname){
            // TODO: Implement setHostName() method.
        }

        public function getServices(){
            // TODO: Implement getServices() method.
        }

        public function setServices($services){
            // TODO: Implement setServices() method.
        }

        public function getTimeZone(){
            // TODO: Implement getTimeZone() method.
        }

        public function setTimeZone($timezone){
            // TODO: Implement setTimeZone() method.
        }

    }