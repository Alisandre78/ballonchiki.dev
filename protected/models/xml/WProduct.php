<?php

class WProduct extends WXmlModel{
        
        public function findByCategoryAll($category) {
                if ( $Category = $this->getCategoryByName($category) ) {
                        if (key_exists('products', $Category) ) {
                                $Products = $Category['products'];
                                return $Products;
                        }
                } return ;
        }
        
        public function getCategoryByName($category) {
                if (key_exists('categories', $this->xml) ) {
                        $Categories = $this->xml['categories'];
                        foreach($Categories as $item) {
                                if ( $item['name'] == $category) {
                                        return $item;
                                }
                        }
                } return ;
        }
        
        public function getProductByAlias($alias) {
                if (key_exists('categories', $this->xml) ) {
                        $Categories = $this->xml['categories'];
                        foreach($Categories as $item) {
                                if ( $Products = $item['products'] ) {
                                        foreach($Products as $product) {
                                                if ( $product['alias'] == $alias ) {
                                                        return $product;
                                                }
                                        }
                                }
                        }       
                } return ;
        }
        
}