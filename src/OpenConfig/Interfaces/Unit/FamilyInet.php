<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces\Unit;
        
    class FamilyInet {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;

        private $address;

        public function __construct($openConfig){
            $this->openConfig = $openConfig;
        }

        public function addAddress($address){
            $this->address[$address] = new \OpenNetworkTools\OpenConfig\Interfaces\Unit\Family\Inet\Address();
        }
    
    }