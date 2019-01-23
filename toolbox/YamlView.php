<?php
    namespace OpenNetworkTools\Toolbox;
        
    class YamlView {

        /**
         * @var \OpenNetworkTools\OpenConfig
         */
        private $openConfig;
        private $render = array();

        public function __construct($openConfig){
            $this->openConfig = $openConfig;
        }

        public function renderView(){
            $this->renderConfigInterfaces();
            $this->renderConfigVlans();
            return implode("\n", $this->render);
        }

        private function renderConfigInterfaces(){
            $this->addRenderLine("interfaces:");
            foreach ($this->openConfig->getInterfaces() as $interface){
                $this->addRenderLine("  - ".$interface->getLabel().":");
                $this->addRenderLine("    description: ".$interface->getDescription());
                $this->addRenderLine("    disable: ".($interface->getDisable()?"true":"false"));
                $this->addRenderLine("    native-vlan: ".(is_object($interface->getNativeVlan())?$interface->getNativeVlan()->getLabel():""));
                $this->addRenderLine("    unit:");
                foreach ($interface->getUnit() as $label => $unit){
                    $this->addRenderLine("      - ".$label.":");
                    $this->addRenderLine("        description: ".$unit->getDescription());
                }
            }
        }

        private function renderConfigVlans(){
            $this->addRenderLine("vlans:");
            foreach ($this->openConfig->getVlans() as $vlan){
                $this->addRenderLine("  - ".$vlan->getLabel().":");
                $this->addRenderLine("    description: ".$vlan->getDescription());
                $this->addRenderLine("    routingInterface: ".(is_object($vlan->getRoutingInterface())?"irb.".$vlan->getRoutingInterface()->getLabel():""));
                $this->addRenderLine("    vlanId: ".$vlan->getVlanId());
            }
        }

        private function addRenderLine($line){
            $this->render[] = $line;
        }

    }