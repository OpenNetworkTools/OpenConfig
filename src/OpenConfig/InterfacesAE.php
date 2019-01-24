<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class InterfacesAE extends \OpenNetworkTools\OpenConfig\Interfaces {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;

        private $interfacesAEMember;

        public function __construct($openConfig, $label){
            parent::__construct($openConfig, $label);
            $this->openConfig = $openConfig;
        }

        public function addInterfacesAEMember($interface){
            $this->interfacesAEMember[$interface] = $this->openConfig->getInterfaces($interface);
        }

    }