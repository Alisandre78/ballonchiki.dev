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
class MainMenuWidget extends CWidget {

        private $data = array();
        private $options = array();
        private $backgroundColor;

	public function init() {
                $model = new WCategory();
                $this->data = $model->findAll();
                
                $options = new WOptions();
                $this->options = $options->getData();
                
                $this->initBackgroundColor();
	}

	public function run() {
		$this->render('MainMenuView', array(
                    'data' => $this->data,
                    'backgroundColor' => $this->backgroundColor,
                ));
	}
        
        private function initBackgroundColor() {
                if (key_exists('design', $this->options))
                        if (key_exists('mainMenu', $this->options['design']))
                                if (key_exists('background', $this->options['design']['mainMenu']))
                                        if (key_exists('color', $this->options['design']['mainMenu']['background']))
                                                $this->backgroundColor = $this->options['design']['mainMenu']['background']['color'];
        }
}