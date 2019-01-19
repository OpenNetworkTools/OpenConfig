<?php
    namespace OpenNetworkTools\Interfaces;
        
    interface OpenConfigInterfaces {

        public function __construct();

        /**
         * @param $label
         * @return \OpenNetworkTools\OpenConfig\Interfaces
         */
        public function addInterfaces($label);
        public function copyInterfaces($label_source, $label_dest);
        public function deleteInterfaces($label = NULL);

        /**
         * @param null $label
         * @return \OpenNetworkTools\OpenConfig\Interfaces
         */
        public function getInterfaces($label = NULL);
        public function replaceInterfaces($label_source, $label_dest);
        public function setInterfaces($interface, $label = NULL);
        public function getProtocols();
        public function setProtocols($protocols);
        public function restoreProtocols();
        public function getSystem();
        public function setSystem($system);
        public function restoreSystem();

        /**
         * @param $label
         * @return \OpenNetworkTools\OpenConfig\Vlans
         */
        public function addVlans($label);
        public function copyVlans($label_source, $label_dest);
        public function deleteVlans($label = NULL);

        /**
         * @param null $label
         * @return array|\OpenNetworkTools\OpenConfig\Vlans
         */
        public function getVlans($label = NULL);
        public function replaceVlans($label_source, $label_dest);
        public function setVlans($vlan, $label = NULL);

    }