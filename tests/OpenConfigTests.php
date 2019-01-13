<?php
        
    class OpenConfigTests extends \PHPUnit\Framework\TestCase {
    
        public function testOpenConfig_instanceOf(){
            $config = new \OpenNetworkTools\OpenConfig();
            $this->assertInstanceOf(\OpenNetworkTools\OpenConfig::class, $config);
        }

        public function testOpenConfig_construct(){
            $config = new \OpenNetworkTools\OpenConfig();

            $this->assertEquals(new \OpenNetworkTools\OpenConfig(), $config);
        }

        public function testOpenConfig_addInterfaces(){
            $config = new \OpenNetworkTools\OpenConfig();
            $config->addInterfaces("test");

            $this->assertEquals(new \OpenNetworkTools\OpenConfig\Interfaces(), $config->getInterfaces("test"));
        }

        public function testOpenConfig_addInterfaces_withNoLabel(){
            $config = new \OpenNetworkTools\OpenConfig();

            $this->expectException(\ArgumentCountError::class);
            $config->addInterfaces();
        }

        public function testOpenConfig_addInterfaces_alreadyExist(){
            $interface = new \OpenNetworkTools\OpenConfig\Interfaces();
            $interface->setDescription("test");

            $config = new \OpenNetworkTools\OpenConfig();
            $config->addInterfaces("test");
            $config->addInterfaces("test")->setDescription("test");

            $this->assertEquals($interface, $config->getInterfaces("test"));
        }
    
    }
?>