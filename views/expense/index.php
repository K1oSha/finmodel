<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Expense */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expense-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Expense', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'texnika_id',
            'fin_model_id',
            'exp_1',
            //'prib_1',
            //'price',
            //'exp_2',
            //'prib_2',
            //'exp_3',
            //'prib_3',
            //'exp_4',
            //'prib_4',
            //'prib_5',
            //'exp_5',
            //'prib_6',
            //'exp_6',
            //'exp_7',
            //'prib_7',
            //'exp_8',
            //'prib_8',
            //'exp_9',
            //'prib_9',
            //'exp_10',
            //'prib_10',
            //'exp_11',
            //'prib_11',
            //'prib_12',
            //'exp_12',
            //'in_stock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
