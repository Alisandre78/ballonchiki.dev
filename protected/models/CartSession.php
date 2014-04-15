<?php
class CartSession{
        
        private static $instance;
        
        private $data = array();
        
        const KEY = 'cart';

        private function __construct() {
                session_start();
                if ( !key_exists(self::KEY, $_SESSION) )
                        $_SESSION[self::KEY] =  array();
                $this->data = &$_SESSION[self::KEY];
        }

        public static function getInstance() {
                if (empty(self::$instance)) {
                        self::$instance = new self();
                } return self::$instance;
        }
        
        public function get() {
                return $this->data;
        }
        
        public function post($product) {
                $amount = false;
                foreach($this->data as &$item) {
                        if ($item['alias'] == $product['alias']) {
                                $amount = true;
                                $item['amount']++;
                                break;
                        }
                }
                if (!$amount) 
                        $this->data[] = array(
                            'amount' => 1,
                            'name' => $product['name'],
                            'alias' => $product['alias'],
                            'price' => $product['price'],
                        );
        }
        
        public function update($product, $amount) {
                foreach($this->data as &$item) {
                        if ( $item['alias'] == $product['alias'] ) {
                                $item['amount'] = $amount;
                                break;
                        }
                }
        }
        
        public function delete($product) {
                foreach($this->data as $key => &$val) {
                        if ( $val['alias'] == $product['alias'] ) {
                                unset( $this->data[$key] );
                                break;
                        }
                }
        }
        
        public function getSummary() {
                $summary = 0;
                foreach($this->data as $item) {
                        $summary += $item['price']*$item['amount'];
                } return $summary;
        }
        
        public function getCount() {
                $count = 0;
                foreach($this->data as $item)
                        $count += $item['amount'];
                return $count;
        }
        
        public function getInfo() {
                return array(
                    'amount' => $this->getCount(),
                    'summary' => $this->getSummary(),
                );
        }
        
        public function emptyCart() {
                session_destroy();
                $this->data = array();
        }
        
}