<?php
namespace OpenNetworkTools\Interfaces\OpenConfig;
        
    interface SystemInterfaces {

        public function __construct();
        public function getHostName();
        public function setHostName($hostname);
        public function getServices();
        public function setServices($services);
        public function getTimeZone();
        public function setTimeZone($timezone);

    }