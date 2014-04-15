<div id="header">

        <div class="header_bg">
                <div class="header_wrap">
                        <div class="row-fluid">
                                <div class="row-fluid__cell cell8">
                                        <div class="logo-chooser">
                                                <div id="logo"><a href="index.php" title="Интернет магазин газовых баллочников ballonchik.in.ua"><img src="images/themes/default/logo_hover.png" alt="Интернет магазин газовых баллочников ballonchik.in.ua"></a></div>
                                        </div>
                                        <div class="main-navigation-cont">
                                                <ul>
                                                        <li>
                                                                <span class="zero-level">Выбрать баллончик</span>
                                                                <ul class="categorises-list">
                                                                        <li class="category-main category-item-selected"><em class="category-pseudo-href"><span class="tab-text"><span class="icon"></span>рекомендуем</span></em></li>
                                                                        <?php foreach($data as $item) { ?>
                                                                                <li class="category-item category-item_home">
                                                                                        <a class="category-item-href" href="#<?=$item['alias'];?>">
                                                                                                <span class="tab-text"><?=$item['name']?></span>
                                                                                        </a>
                                                                                </li>
                                                                        <?php } ?>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="main-services">
                                                <span class="zero-level">Доставка и оплата</span>
                                                <span class="zero-level">Отзывы</span></div>
                                                <span class="zero-level cart" style="background-color: greenyellow;;">
                                                        <?php $CartIsEmpty = ($CartInfo['amount'] < 1); ?>
                                                                <div class="msg" style="display: <?=($CartIsEmpty?'block':'none');?>;">корзина пуста</div>
                                                                <div class="info" style="display: <?=(!$CartIsEmpty?'block':'none');?>;">
                                                                        <span class="open-popup">В корзине <b><?= $CartInfo['amount'];?></b> шт. товара на <b class="summary"><?=$CartInfo['summary'];?></b> грн.</span>
                                                                        <span onclick="location.href='index.php?r=checkout/index'">Оформить заказ</span>
                                                                </div>
                                                </span>
                                        </div>
                                        <div class="clear"></div>
                                </div>
                                <div class="row-fluid__cell cell4">
                                </div>
                        </div>
                </div>
        </div>
        
</div>