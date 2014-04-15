<div class="proposals-group">

        <?php foreach($data as $item) { ?>
                <a name="<?=$item['alias'];?>"></a>
                <div class="proposals-group-inner">
                        <div class="proposals-title"><h2 style="text-align: <?=$textAlign;?>;padding-left: 20px; padding-right: 20px;"><?=$item['name'];?></h2></div>

                        <?php $this->widget('ListProductWidget', array(
                            'category'=>$item['name'],
                        )); ?>

                </div>
        <?php } ?>

</div>