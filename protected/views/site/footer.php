<div id="footer">
        <div class="footer-navigation">
                <div class="footer-wrapper row-fluid">
                        <div class="footer-navigation-item row-fluid__cell cell4 phones-bigbuzzy">
                                <div class="footer-hotline">
                                        <p>Телефон<?=(count($options['params']['tel']>1)?'ы':'');?> горячей линии</p>
                                        <?php foreach($options['params']['tel'] as $tel) { ?>
                                                <p class="phone-number">
                                                        <i class="icon icon-hotline"></i>
                                                        <span class="phone"><?=$tel;?></span>
                                                </p>
                                        <?php } ?>
                                </div>
                        </div>
                        <div class="footer-navigation-item row-fluid__cell about-bigbuzzy">
                                <ul class="footer_nav_list">
                                        <li><a class="title-item" href="http://ballonchiki.in.ua/about/">Все о BigBuzzy</a></li>
                                        <li><a class="title-item" href="http://ballonchiki.in.ua/about/faq/">Вопросы и ответы</a></li>
                                        <li><a class="title-item" href="http://ballonchiki.in.ua/disclaimer-services/">Пользовательское соглашение</a></li>
                                        <li><a class="title-item" href="http://ballonchiki.in.ua/business/">BigBuzzy для бизнеса</a></li>
                                </ul>
                        </div>
                        <div class="footer-navigation-item row-fluid__cell footer-navigation-item_main-menu">
                                <ul class="footer_nav_list">
                                        <li><a class="title-item" href="http://ballonchiki.in.ua/saint-petersburg/past/">Прошедшие акции</a></li>
                                        <li><a class="title-item" href="http://ballonchiki.in.ua/gift-card/">Подарочные карты</a></li>
                                        <li><a class="title-item" href="https://ballonchiki.in.ua/about/feedback/" onclick="return $.popup(this.href, {width: 800, height: 840})">Обратная связь</a></li>
                                </ul>
                        </div>
                        <div class="footer-navigation-item row-fluid__cell cell3">
                                <div class="social">
                                        <p class="social__title">Bigbuzzy в соцсетях</p>
                                        <a href="http://twitter.com/bigbuzzy" class="d-inline-block social__link_item" target="_blank"><i class="icon icon-twitter"></i></a> <a href="http://www.facebook.com/#!/pages/BigBuzzy/132317150113783" class="d-inline-block social__link_item" target="_blank"><i class="icon icon-facebook"></i></a> <a href="http://vkontakte.ru/club18127109" class="d-inline-block social__link_item" target="_blank"><i class="icon icon-vkontakte"></i></a> 
                                </div>
                        </div>
                </div>
        </div>
        <div class="copyright">
                <div class="footer-wrapper"> ©&nbsp;ballonchiki.in.ua 2014&nbsp;| <a href="mailto:<?=$options['params']['email']['e1'];?>"><?=$options['params']['email']['e1'];?></a> 
                        <span class="contact-information">Размещение рекламы и&nbsp;сотрудничество с&nbsp;рекламными агентствами <a href="mailto:<?=$options['params']['email']['e2'];?>"><?=$options['params']['email']['e2'];?></a></span> 
                </div>
        </div>
</div>