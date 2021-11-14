<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Expense */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Expenses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="expense-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'texnika_id',
            'fin_model_id',
            'exp_1',
            'prib_1',
            'price',
            'exp_2',
            'prib_2',
            'exp_3',
            'prib_3',
            'exp_4',
            'prib_4',
            'prib_5',
            'exp_5',
            'prib_6',
            'exp_6',
            'exp_7',
            'prib_7',
            'exp_8',
            'prib_8',
            'exp_9',
            'prib_9',
            'exp_10',
            'prib_10',
            'exp_11',
            'prib_11',
            'prib_12',
            'exp_12',
            'in_stock',
        ],
    ]) ?>

</div>
