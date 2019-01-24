<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class System {
    
        private $hostname;
        private $timezone;
        private $services;

        public function __construct(){
        }

        /**
         * @return mixed
         */
        public function getHostName(){
            return $this->hostname;
        }

        /**
         * @param $hostname
         * @return $this
         */
        public function setHostName($hostname){
            $this->hostname = $hostname;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getTimezone(){
            return $this->timezone;
        }

        /**
         * @param mixed $timezone
         * @return $this
         */
        public function setTimezone($timezone){
            $this->timezone = $timezone;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getServices(){
            return $this->services;
        }

        /**
         * @return System\Services
         */
        public function setServices(){
            if(!is_object($this->services)) $this->services = new \OpenNetworkTools\OpenConfig\System\Services();
            return $this->services;
        }

    }