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
        private $type;
        private $vlanId;
        private $vxlan;

        private $members;

        /**
         * Vlans constructor.
         * @param $openConfig
         * @param $label
         */
        public function __construct($openConfig, $label){
            $this->openConfig = $openConfig;
            $this->label = $label;
        }

        /**
         * @return string
         */
        public function getLabel(){
            return $this->label;
        }

        /**
         * @param $label
         * @return $this
         */
        public function setLabel($label){
            $this->label = $label;
            return $this;
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
            if(is_array($this->routingInterface)) return $this->routingInterface[key($this->routingInterface)];
            else return null;
        }

        /**
         * @param $unitLabel
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit
         * @throws \Exception
         */
        public function setRoutingInterface($unitLabel){
        }

        public function getType(){
            return $this->type;
        }

        /**
         * @param null $type port-mstprstp
         * @param null $type spbm-bvlan
         * @return Vlans\PortMstpRstp|Vlans\SpbmBVlan
         * @throws \Exception
         */
        private function setType($type = null){
            switch ($type){
                case "port-mstprstp":
                    $this->type = new \OpenNetworkTools\OpenConfig\Vlans\PortMstpRstp();
                    break;
                case "spbm-bvlan":
                    $this->type = new \OpenNetworkTools\OpenConfig\Vlans\SpbmBVlan();
                    break;
                default:
                    throw new \Exception("erreur");
            }
            return $this->type;
        }

        public function setTypePortMstpRstp(){
            return $this->setType("port-mstprstp");
        }

        public function setTypeSpbmBVlan(){
            return $this->setType("spbm-bvlan");
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

        public function addMember($label, $interface){
            $this->members[$label] = $interface;
            return $this;
        }

        public function getMembers(){
            return $this->members;
        }

    }