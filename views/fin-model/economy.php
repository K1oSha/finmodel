<?php

$this->title = 'Оценка экономической эффективности';
$this->params['breadcrumbs'][] = ['label' => 'Ф', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

use yii\grid\GridView;
use yii\helpers\Html;?>

<div class="fin-model-create row">

    <h3><?= Html::encode($this->title)?> культуры <?=$nameCulturi?> </h3>
    <p>Будет ли ваш продукт дешевле или дороже чем средний продкут на полке</p>
    <div class="col-12">

        <? if($averangePrice <= $priceFromRossStat * 1.2):?>

        <h4 style="font-weight: 300" >Себестоимость производимого вами сорта за 1кг: <b style="color: green"><?= $averangePrice?></b></h4>
            <h4 style="font-weight: 300" > Стоимость сорта продукции, сложившаяся в данном регоине: <?= $priceFromRossStat?></h4>
            <br>
        <h4 style="font-weight: 400">Вывод: товар обладает высокой конкурентноспособностью на рынке</h4>

        <?  else: ?>
            <?if($averangePrice <= $priceFromRossStat * 1.4):?>
            <h4 style="font-weight: 300" >Себестоимость производимого вами сорта за 1кг: <b style="color:orange"><?= $averangePrice?></b></h4>
            <h4 style="font-weight: 300" > Стоимость сорта продукции, сложившаяся в данном регоине: <?= $priceFromRossStat?></h4>
                <br>
            <h4 style="font-weight: 400">Вывод: товар обладает средней конкурентноспособностью на рынке</h4>
            <?else:?>
                <h4 style="font-weight: 300" >Себестоимость производимого вами сорта за 1кг: <b style="color: red"><?= $averangePrice?></b></h4>

                <h4 style="font-weight: 300" > Стоимость сорта продукции, сложившаяся в данном регоине: <?= $priceFromRossStat?></h4>
                <br>
                <h4 style="font-weight: 400">Вывод: товар обладает низкой конкурентноспособностью на рынке</h4>
            <?endif;?>
        <?endif;?>
    </div>
</div>


