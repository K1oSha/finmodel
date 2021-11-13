<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Texnika */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Реестр техники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="texnika-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить технику в реестр', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'toplivo',
            'norma',
            'price',
            ['class' => 'yii\grid\ActionColumn',
                'header'=>"Действия",
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
