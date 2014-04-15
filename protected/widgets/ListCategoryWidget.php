<?php

/**
 * ListCategoryWidget class file
 * @author Denis Ivanov <denquick@gmail.com>
 */

/**
 * ListCategoryWidget is the 
 *
 * @author Denis Ivanov <denquick@gmail.com>
 * @package application.widgets
 * 
 * @since 1.0
 */
class ListCategoryWidget extends CWidget {

        private $data = array();
        private $options = array();
        private $positionTitle = 'center';

        public function init() {
                $model = new WCategory();
                $this->data = $model->findAll();

                $options = new WOptions();
                $this->options = $options->getData();
                
                $this->initPositionTitle();
        }

        public function run() {

                $this->render('ListCategoryView', array(
                    'data' => $this->data,
                    'options' => $this->options,
                    'textAlign' => $this->positionTitle,
                ));
        }

        private function initPositionTitle() {
                if (key_exists('design', $this->options))
                        if (key_exists('category', $this->options['design']))
                                if (key_exists('title', $this->options['design']['category']))
                                        if (key_exists('position', $this->options['design']['category']['title']))
                                                $this->positionTitle = $this->options['design']['category']['title']['position'];
        }

}
