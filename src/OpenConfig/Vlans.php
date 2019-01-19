<?php
    namespace OpenNetworkTools\OpenConfig;
        
    class Vlans {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;
        private $label;

        private $description;
        private $routingInterface;
        private $vlanId;
        private $vxlan;

        public function __construct($openConfig, $label){
            $this->openConfig = $openConfig;
            $this->label = $label;
        }

        public function getLabel(){
            return $this->label;
        }

        public function setLabel($label){
            $this->label = $label;
        }


        /**
         * @return string
         */
        public function getDescription(){
            return $this->description;
        }

        /**
         * @param $description
         * @return $this
         */
        public function setDescription($description){
            $this->description = $description;
            return $this;
        }

        /**
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit
         */
        public function getRoutingInterface(){
            return $this->routingInterface[key($this->routingInterface)];
        }

        /**
         * @param $unitLabel
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit
         * @throws \Exception
         */
        public function setRoutingInterface($unitLabel){
            if(sizeof($this->routingInterface) == 0){
                $this->routingInterface[$unitLabel] = $this->openConfig->getInterfaces("irb")->getUnit($unitLabel);
                return $this->getRoutingInterface();
            } else throw new \Exception("erreur");
        }

        /**
         * @return mixed
         */
        public function getVlanId(){
            return $this->vlanId;
        }

        /**
         * @param $vlanId
         * @return $this
         */
        public function setVlanId($vlanId){
            $this->vlanId = $vlanId;
            return $this;
        }

    }