<div class="widget-cart-chheckout" style="border: 1px solid #000; width: 200px;padding: 10px;">
        <?php foreach($data as $item) { ?>
        <div class="item" style="border: 1px solid #000; padding: 10px;" >
                <div class="name"><?=$item['name'];?></div>
                <div class="amount"><?=$item['amount'];?> шт.</div>
                <div class="price"><?=$item['amount']*$item['price'];?> грн.</div>
        </div>
        <?php } ?>
        
        <div class="summary">Итого <b><?=$summary;?></b></div>
</div>