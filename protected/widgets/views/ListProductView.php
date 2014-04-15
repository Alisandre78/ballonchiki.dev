<?php foreach($data as $item) { ?>

<div class="offer offer-card">
        <div class="offer-inner"><div class="offer__info">
                        <div style="background-image: url(images/pix/tumbs/<?=$item['logo'];?>);" class="offer__image">
                                <a class="offer__description-href" href="#"></a>
                                <em class="icon offer__info-badge"></em>
                                <div class="offer__icon"><i class="icon icon-favorite favorite-button"></i></div>
                        </div>
                        <!-- end -->
                        <div class="offer-title"><h3 class="offer-title__href" href="#"><?=$item['name'];?></h3></div>
                        <div class="proposal-price">
                                <span class="inner-proposal-price">Цена: <span class="proposal-select"><?=$item['price']?><small>&nbsp;грн.</small></span></span>
                                
                                <button class="ibutton-css-green open-popup" alias="<?=$item['alias'];?>">Купить!</button>
                        </div>
                        <div class="offer__meta">	
                                <span class="description"><?=$item['description']?></span>
                        </div>
                </div>

        </div>
</div>

<?php } ?>