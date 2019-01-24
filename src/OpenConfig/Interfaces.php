<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class Interfaces {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;
        private $label;

        private $description;
        private $disable = false;
        private $etherOptions;
        private $nativeVlan;
        private $unit;

        public function __construct($openConfig, $label){
            $this->openConfig   = $openConfig;
            $this->label        = $label;
        }

        public function getLabel(){
            return $this->label;
        }

        public function setLabel($label){
            $this->label = $label;
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

        public function getEtherOptions(){
            return $this->etherOptions;
        }

        public function setEtherOptions(){
            if(!is_object($this->etherOptions)) $this->etherOptions = new \OpenNetworkTools\OpenConfig\Interfaces\EtherOptions($this->openConfig, $this->label);
            return $this->etherOptions;
        }

        /**
         * @return \OpenNetworkTools\OpenConfig\Vlans
         */
        public function getNativeVlan(){
            return $this->nativeVlan;
        }

        public function setNativeVlan($label){
            $this->nativeVlan = $this->openConfig->getVlans($label);
            return $this;
        }

        public function deleteNativeVlan(){
            $this->nativeVlan = null;
            return $this;
        }

        /**
         * @param $label
         * @return array | \OpenNetworkTools\OpenConfig\Interfaces\Unit
         */
        public function addUnit($label = 0){
            if(!@is_object($this->unit[$label])) $this->setUnit($label, new \OpenNetworkTools\OpenConfig\Interfaces\Unit($this->openConfig, $label, $this->label));
            return $this->unit[$label];
        }

        public function copyUnit(){
        }

        public function deleteUnit(){
        }

        /**
         * @param null $label
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit
         */
        public function getUnit($label = null){
            if(!is_null($label)) return $this->unit[$label];
            else {
                if(is_array($this->unit)) return $this->unit;
                else return array();
            }
        }

        public function replaceUnit(){
        }

        /**
         * @param $label
         * @param string $unit
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit
         */
        public function setUnit($label, $unit = \OpenNetworkTools\OpenConfig\Interfaces\Unit::class){
            $this->unit[$label] = $unit;
            ksort($this->unit);
            return $this->unit[$label];
        }

    }