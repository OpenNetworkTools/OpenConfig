<?php
        
    class OpenConfigTests extends \PHPUnit\Framework\TestCase {
    
        public function testOpenConfig_instanceOf(){
            $config = new \OpenNetworkTools\OpenConfig();
            $this->assertInstanceOf(\OpenNetworkTools\OpenConfig::class, $config);
        }
    
    }
?>