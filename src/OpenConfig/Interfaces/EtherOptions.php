<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces;
        
    class EtherOptions {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;
        private $interfaceLabel;

        private $IEEE8023ad;
        private $spedd;

        public function __construct($openConfig, $interfaceLabel){
            $this->openConfig   = $openConfig;
            $this->interfaceLabel = $interfaceLabel;
        }

        public function add802_3AD($label){
            $this->IEEE8023ad = $this->openConfig->getInterfaces($label);
            $this->openConfig->getInterfaces($label)->addInterfacesAEMember($this->interfaceLabel);
            return $this;
        }


    
    }