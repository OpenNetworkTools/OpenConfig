<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class Interfaces {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;

        private $description;
        private $disable = false;
        private $nativeVlan;
        private $unit;

        public function __construct($openConfig){
            $this->openConfig = $openConfig;
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
        public function addUnit($label){
            if(!@is_object($this->unit[$label])) $this->setUnit($label, new \OpenNetworkTools\OpenConfig\Interfaces\Unit());
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
            else return $this->unit;
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