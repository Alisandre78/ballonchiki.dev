<?php
class WXml extends CComponent{

        private static $instance;
        
        private $data = array();
        
        const PATH = 'products.xml';

        private function __construct() {
                $this->setData();
        }

        public static function getInstance() {
                if (empty(self::$instance)) {
                        self::$instance = new self();
                }
                return self::$instance;
        }
        
        private function setData() {
                $xml = simplexml_load_file(self::PATH);
                if ($xml)
                        $this->data = unserialize(serialize(json_decode(json_encode( (array) $xml), 1) ));
        }

        public function getData() {
               return $this->data;
        }

}
