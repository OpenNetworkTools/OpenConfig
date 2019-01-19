<?php
    namespace OpenNetworkTools;
        
    class OpenConfig {

        private $chassis;
        private $interfaces;
        private $protocols;
        private $routingInstances;
        private $services;
        private $system;
        private $vlans;

        public function __construct(){
        }

        /**
         * @param $label
         * @return \OpenNetworkTools\OpenConfig\Interfaces
         */
        public function addInterfaces($label){
            if(!is_object($this->interfaces[$label])) $this->setInterfaces($label, new \OpenNetworkTools\OpenConfig\Interfaces($this));
            return $this->interfaces[$label];
        }

        public function addIntercaesAE($unit){
            return $this->addInterfaces("ae".$unit);
        }

        /**
         * @return OpenConfig\Interfaces
         */
        public function addInterfacesL3(){
            return $this->addInterfaces('irb');
        }

        /**
         * @param $inputLabel
         * @param $outputLabel
         */
        public function copyInterfaces($inputLabel, $outputLabel){
            $this->setInterfaces($outputLabel, clone $this->getInterfaces($inputLabel));
        }

        /**
         * @param $label
         */
        public function deleteInterfaces($label){
            unset($this->interfaces[$label]);
        }

        /**
         * @param null $label
         * @return array | \OpenNetworkTools\OpenConfig\Interfaces
         */
        public function getInterfaces($label = null){
            if(!is_null($label)) return $this->interfaces[$label];
            else return $this->interfaces;
        }

        /**
         * @param $inputLabel
         * @param $outputLabel
         */
        public function replaceInterfaces($inputLabel, $outputLabel){
            $this->copyInterfaces($inputLabel, $outputLabel);
            $this->deleteInterfaces($inputLabel);
        }

        /**
         * @param $label
         * @param string $interface
         */
        public function setInterfaces($label, $interface = \OpenNetworkTools\OpenConfig\Interfaces::class){
            $this->interfaces[$label] = $interface;
            ksort($this->interfaces);
            return $this->interfaces[$label];
        }

        /**
         * @param $label
         * @return \OpenNetworkTools\OpenConfig\Vlans
         */
        public function addVlans($label){
            if(!@is_object($this->vlans[$label])) $this->setVlans($label);
            return $this->vlans[$label];
        }

        /**
         * @param $inputLabel
         * @param $outputLabel
         */
        public function copyVlans($inputLabel, $outputLabel){
            $this->setVlans($outputLabel, clone $this->getVlans($inputLabel));
            $this->getVlans($outputLabel)->setLabel($outputLabel);
        }

        /**
         * @param $label
         */
        public function deleteVlans($label){
            unset($this->vlans[$label]);
        }

        /**
         * @param null $label
         * @return array | \OpenNetworkTools\OpenConfig\Vlans
         */
        public function getVlans($label = null){
            if(!is_null($label)) return $this->vlans[$label];
            else return $this->vlans;
        }

        /**
         * @param $inputLabel
         * @param $outputLabel
         */
        public function replaceVlans($inputLabel, $outputLabel){
            $this->copyVlans($inputLabel, $outputLabel);
            $this->deleteVlans($inputLabel);
        }

        /**
         * @param $label
         * @param string $vlan
         * @return \OpenNetworkTools\OpenConfig\Vlans
         */
        public function setVlans($label, $vlan = null){
            if(is_object($vlan)) $this->vlans[$label] = $vlan;
            else {
                $this->vlans[$label] = new \OpenNetworkTools\OpenConfig\Vlans($this, $label);
            }
            ksort($this->vlans);
            return $this->vlans[$label];
        }

    }