<?= $this->renderPartial('header', array(
        'CartInfo' => $CartInfo,
)); ?>
<?= $this->renderPartial('body', array(
    'options' => $options,
)); ?>