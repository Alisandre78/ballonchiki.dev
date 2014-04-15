<?php $this->widget('CartCheckoutWidget'); ?>
<br />


Оформление заказа
<form method="post" id="checkout-form">
        <table>
                <tr>
                        <td>ФИО:</td>
                        <td>
                                <input name="Form[fio]"  required="" >
                        </td>
                </tr>
                <tr>
                        <td>Где вы находитесь:</td>
                        <td>
                                <select class="state">
                                        <option>Область</option>
                                        <?php foreach($ua as $key => $val) { ?>
                                                <option value="<?=$key;?>"><?=$key;?></option>
                                        <?php } ?>
                                </select>
                                <select class="city" name="Form[city]" required="" style="display: none;">
                                        <option>Город</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Телефон:</td>
                        <td>
                                <input name="Form[tel]"  required="" >
                        </td>
                </tr>
        </table>
        <input type="submit" value="Заказать!">
</form>
<script>
        var ua = eval(<?=  json_encode($ua);?>)
</script>

<a href="index.php" style="color: blue;">Продолжить покупки</a>