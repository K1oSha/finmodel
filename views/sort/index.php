<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Sort */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сорта культур';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sort-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить сорт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                    'attribute' => 'cultura_id',
                    'value'=>function($model){return $model->cultura->name;},
                    'filter'=>\app\models\Cultura::getCultures()
            ],

            'plus',
            'minus',
            //'profit',
            //'tovarnost',
            //'time_grow',
            //'lejcost',
            //'price',
            //'area_number',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>"Действия",

            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
