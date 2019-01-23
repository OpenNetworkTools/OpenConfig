<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces;
        
    class Unit {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;
        private $label;
        private $interfaceLabel;
    
        private $description;
        private $disable = false;
        private $family;

        public function __construct($openConfig, $label, $interfaceLabel){
            $this->openConfig = $openConfig;
            $this->label = $label;
            $this->interfaceLabel = $interfaceLabel;
        }

        public function getLabel(){
            return $this->label;
        }

        public function setLabel($label){
            $this->label = $label;
            return $this;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
            return $this;
        }

        public function getDisable(){
            return $this->disable;
        }

        public function setDisable(){
            $this->disable = true;
            return $this;
        }

        public function deleteDisable(){
            $this->disable = false;
            return $this;
        }

        /**
         * @param $family
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit\FamilyEthernetSwitching
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit\FamilyInet
         * @throws \Exception
         */
        private function addFamily($family){
            switch ($family){
                case "ethernet-switching":
                    if(!is_object($this->family["ethernet-switching"])) $this->family["ethernet-switching"] = new \OpenNetworkTools\OpenConfig\Interfaces\Unit\FamilyEthernetSwitching($this->openConfig, $this->interfaceLabel);
                    return $this->family["ethernet-switching"];
                    break;
                case "inet":
                    if(!is_object($this->family["inet"])) $this->family["inet"] = new \OpenNetworkTools\OpenConfig\Interfaces\Unit\FamilyInet($this->openConfig);
                    return $this->family["inet"];
                    break;
                default:
                    throw new \Exception("erreur");
            }
        }

        public function addFamilyEthernetSwitching(){
            return $this->addFamily("ethernet-switching");
        }

        public function addFamilyInet(){
            return $this->addFamily("inet");
        }

        public function deleteFamily(){
        }

        public function getFamily(){
        }

        public function setFamily(){
        }
    
    }