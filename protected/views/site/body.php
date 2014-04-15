<div id="fake-body">

        <div id="page_layout">
                <div id="outer">
                        <div id="page_wrapper">

                                <div id="content">

                                        <?php $this->widget('MainMenuWidget'); ?>

                                        <div class="homepage">

                                                <h1><?=$options['site']['name'];?></h1>
                                                <div class="con_desc"><?=$options['site']['description'];?></div>

                                                        <?php $this->widget('ListCategoryWidget'); ?>


                                                        <!--footer-->
                                                        <?= $this->renderPartial('footer', array(
                                                            'options' => $options,
                                                        )); ?>

                                        </div>

                                </div>

                        </div>
                </div>
        </div>
</div>