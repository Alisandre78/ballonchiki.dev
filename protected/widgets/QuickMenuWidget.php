<?php
 /**
 * MainMenuWidget class file
 * @author Denis Ivanov <denquick@gmail.com>
 */

/**
 * MainMenuWidget is the 
 *
 * @author Denis Ivanov <denquick@gmail.com>
 * @package application.widgets
 * 
 * @since 1.0
 */
class QuickMenuWidget extends CWidget {
        
        private $data = array();
        public $CartInfo;

	public function init() {
                $model = new WCategory();
                $this->data = $model->findAll();
	}

	public function run() {
		$this->render('QuickMenuView', array(
                    'data' => $this->data,
                    'CartInfo' => $this->CartInfo,
                ));
	}
}