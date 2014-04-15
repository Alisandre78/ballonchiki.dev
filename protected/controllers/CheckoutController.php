<?php

class CheckoutController extends Controller {

//        public $layout='//layouts/column1';

        private $Cart;

        public function __construct($id, $module = null) {
                parent::__construct($id, $module);
                $this->setCartInstance();
        }

        public function actionIndex() {
                if (key_exists('Form', $_POST)) {
                        if ($order_id = WMailerHelper::sendMailSuccessOrder(array(
                                    'description' => 'description',
                                ))) {
                                $this->Cart->emptyCart();
                                $this->redirect('index.php?r=checkout/complete/order_id/' . $order_id);
                        }
                } else {
                        $ua = file_get_contents('ua.serialize');
                        $this->render('index', array(
                            'ua' => unserialize($ua),
                            'data' => $this->Cart->get(),
                            'summary' => $this->Cart->getSummary(),
                            'amount' => $this->Cart->getCount(),
                        ));
                }
        }

        public function actionComplete($order_id) {
                $this->render('complete', array(
                    'order_id' => $order_id,
                ));
        }

        private function setCartInstance() {
                $this->Cart = CartSession::getInstance();
        }

}
