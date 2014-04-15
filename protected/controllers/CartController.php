<?php

class CartController extends Controller {
        
        public $layout='//layouts/column2';
        
        private $Cart;
        
        public function __construct($id, $module = null) {
                parent::__construct($id, $module);
                $this->setCartInstance();
        }
        
        public function actionIndex() { }
        
        public function actionGet() { }
        
        public function actionPost() { }
        
        public function actionUpdate() {
                if ( key_exists('alias', $_REQUEST) && key_exists('amount', $_REQUEST) ) {
                        $amount = $_REQUEST['amount'];
                        $product = $this->getProduct();
                        $this->Cart->update($product, $amount);
                } $this->renderView();
        }
        public function actionDelete() {
                if (key_exists('alias', $_REQUEST) ) {
                        $product = $this->getProduct();      
                        $this->Cart->delete($product);
                } $this->renderView();
        }
        
        public function actionPopup() {
                if (key_exists('alias', $_REQUEST) ) {
                        $product = $this->getProduct();
                        $this->Cart->post($product);
                } $this->renderView();
        }
        
        public function actionGetInfo() {
                echo json_encode( $this->Cart->getInfo() ); 
                exit;
        }
        
        private function getProduct() {
                if (key_exists('alias', $_REQUEST))
                        $alias = $_REQUEST['alias'];
                $model = new WProduct();
                return $model->getProductByAlias($alias);
        }
        
        private function setCartInstance() {
                $this->Cart = CartSession::getInstance();
        }
        
        private function renderView($view = 'popup') {
                $this->render($view, array(
                    'data' => $this->Cart->get(),
                    'summary' => $this->Cart->getSummary(),
                ));
        }

}