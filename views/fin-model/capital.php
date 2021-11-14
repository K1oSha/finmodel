<?php

$this->title = 'Капитальные вложения';
$this->params['breadcrumbs'][] = ['label' => 'Ф', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

use app\models\Cultura;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url; ?>

<div class="fin-model-create row">

    <h3><?= Html::encode($this->title) ?></h3>

    <div class="col-6">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                    [
                            'attribute' => 'name',
                            'label' => 'Название'
                    ],
                    [
                        'attribute' => 'price',
                        'label' => 'Стоимость р.'
                    ],
            ],
        ]); ?>
        <h2 style="text-align: right">Итого: <b><?= $itogo?></b></h2>
    </div>

</div>

