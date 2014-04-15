<div id="cart-popup">
        <table class="form">
                <tr>
                        <td>*</td>
                        <td>Товар</td>
                        <td>Цена</td>
                        <td>Колиество</td>
                        <td>Сумма</td>
                </tr>
                <?php foreach($data as $item) { ?>
                <tr alias="<?=$item['alias'];?>">
                        <td class="delete">x</td>
                        <td class="name-product"><?=$item['name'];?></td>
                        <td class="name-product"><?=$item['price'];?></td>
                        <td class="name-product">
                                <input value="<?=$item['amount']?>"> шт.
                        </td>
                        <td><b><?=$item['amount']*$item['price']?></b>грн.</td>
                </tr>
                <?php } ?>
        </table>
        <div class="total">
                Итого: <b><?=$summary;?></b> грн.
        </div>
</div>