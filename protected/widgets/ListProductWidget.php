<?php
 /**
 * ListProductWidget class file
 * @author Denis Ivanov <denquick@gmail.com>
 */

/**
 * ListProductWidget is the 
 *
 * @author Denis Ivanov <denquick@gmail.com>
 * @package application.widgets
 * 
 * @since 1.0
 */
class ListProductWidget extends CWidget {
        
        private $data = array();
        
        public $category;

	public function init() {
                $model = new WProduct();
                $this->data = $model->findByCategoryAll( $this->category );
	}

	public function run() {
		$this->render('ListProductView', array(
                    'data' => $this->data,
                ));
	}
}