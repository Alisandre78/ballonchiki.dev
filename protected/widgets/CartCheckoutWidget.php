<?php
 /**
 * CartCheckoutWidget class file
 * @author Denis Ivanov <denquick@gmail.com>
 */

/**
 * CartCheckoutWidget is the 
 *
 * @author Denis Ivanov <denquick@gmail.com>
 * @package application.widgets
 * 
 * @since 1.0
 */
class CartCheckoutWidget extends CWidget {
        
        private $Cart;
        public $view = 'CartCheckoutView';

	public function init() {
                $this->Cart = CartSession::getInstance();
	}

	public function run() {
		$this->render($this->view, array(
                    'data' => $this->Cart->get(),
                    'summary' => $this->Cart->getSummary(),
                ));
	}
        
        private function setForm() {
                if (key_exists('Form', $_POST) ) 
                        $this->Form = (object)$_POST['Form'];
        }
}