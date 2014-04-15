<div class="header-proposals" style=" <?=($backgroundColor)?'background-color:'. $backgroundColor:''; ?>" >

        <div class="header-proposals__inner">

                <div class="categorises"> 
                        <ul class="categorises-list">
                                <li class="category-main category-item-selected"><em class="category-pseudo-href"><span class="tab-text"><span class="icon"></span>рекомендуем</span></em></li>
                                <?php foreach($data as $item) { ?>
                                        <li class="category-item category-item_home">
                                                <a class="category-item-href" href="#<?=$item['alias'];?>">
                                                        <span class="tab-text"><?=$item['name'];?></span>
                                                </a>
                                        </li>
                                <?php } ?>
                        </ul>
                </div>

        </div>
</div>