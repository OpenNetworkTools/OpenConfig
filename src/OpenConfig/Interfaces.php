<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class Interfaces {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;

        private $description;
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

        public function addUnit($label){
            if(!@is_object($this->unit[$label])) $this->setUnit($label, new \OpenNetworkTools\OpenConfig\Interfaces\Unit());
            return $this->unit[$label];
        }

        public function copyUnit(){
        }

        public function deleteUnit(){
        }

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