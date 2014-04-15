<?php

class WOptions extends WXmlModel{
        
        public function getData() {
                if (key_exists('options', $this->xml) )
                        return $this->xml['options'];
                return ;
        }
        
}