<?php

use app\models\Region;
use app\models\Sort;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\FinModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Финансовые модели';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fin-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать финансовую модель', ['start'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'sort_id', 
                'value' => Sort::findOne($model->sort_id)->name
            ],
            [
                'attribute' => 'area_house',
                'value' => Region::findOne((Sort::findOne($model->sort_id)->area_number))->name
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
