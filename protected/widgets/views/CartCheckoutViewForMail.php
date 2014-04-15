<?php 
        $Form = (object)$_POST['Form'];
?>
<H3>Информация о заказе</H3>
<table>
        <tr>
                <td>Товар</td>
                <td>Количество</td>
                <td>Цена за штуку</td>
                <td>Цена полностью</td>
        </tr>
        <?php foreach($data as $item) {?>
        <tr>
                <td><?=$item['name'];?></td>
                <td><?=$item['amount'];?> шт.</td>
                <td><?=$item['price'];?> грн.</td>
                <td><?=$item['price']*$item['amount'];?> грн.</td>
        </tr>
        <?php } ?>
</table>
<div class="summary">Итого <b><?=$summary;?></b> грн.</div>


<H3>Иинформация о покупателе</H3>
<table>
        <tr>
                <td>ФИО</td>
                <td><?=$Form->fio;?></td>
        </tr>
        <tr>
                <td>Город</td>
                <td><?=$Form->city;?></td>
        </tr>
        <tr>
                <td>Телефон</td>
                <td><?=$Form->tel;?></td>
        </tr>
</table>