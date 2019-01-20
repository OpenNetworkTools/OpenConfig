<?php
    namespace OpenNetworkTools\OpenConfig\Vlans;
        
    class SpbmBVlan {
    
        private $color;
        private $type = "spbm-bvlan";

        public function __construct(){
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
            return $this;
        }

        public function getType(){
            return $this->type;
        }

    }