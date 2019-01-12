<?php
    namespace OpenNetworkTools\Interfaces\OpenConfig;

    interface ProtocolsInterfaces {

        public function __construct();
        public function getBGP();
        public function setBGP($bgp);
        public function restoreBGP();

    }