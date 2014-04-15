<?php
class WXmlModel {
        
        protected $xml = array();
        
        public function __construct() {
                $this->xml = WXml::getInstance()->getData();
        }
}
