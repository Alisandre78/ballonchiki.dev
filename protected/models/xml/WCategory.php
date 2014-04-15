<?php

class WCategory extends WXmlModel{
        
        public function findAll() {
                if (key_exists('categories', $this->xml) )
                        return $this->xml['categories'];
                return ;
        }
        
}