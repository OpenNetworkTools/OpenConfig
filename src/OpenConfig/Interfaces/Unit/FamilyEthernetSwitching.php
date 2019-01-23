<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces\Unit;
        
    class FamilyEthernetSwitching {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;
        private $interfaceLabel;

        private $portMode;
        private $vlansMembers;

        public function __construct($openConfig, $interfaceLabel){
            $this->openConfig = $openConfig;
            $this->interfaceLabel = $interfaceLabel;
        }

        public function getInterfaceLabel(){
            return $this->interfaceLabel;
        }

        public function getPortMode(){
            return $this->portMode;
        }

        private function setPortMode($mode){
            $this->portMode = $mode;
            return $this;
        }

        public function setPortModeAccess(){
            return $this->setPortMode("access");
        }

        public function setPortModeTrunk(){
            return $this->setPortMode("trunk");
        }

        public function addVlanMember($label){
            $this->vlansMembers[$label] = $this->openConfig->getVlans($label);
            $this->openConfig->getVlans($label)->addMember($this->interfaceLabel, $this->openConfig->getInterfaces($this->interfaceLabel));
            return $this;
        }
    
    }