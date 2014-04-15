<?php

class SiteController extends Controller {

        public function actionIndex() {
                $model = WXml::getInstance()->getData();

                $this->render('index', array(
                    'options' => $model['options'],
                    'CartInfo' => CartSession::getInstance()->getInfo(),
                ));
        }

}
