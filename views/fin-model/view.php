<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fin Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fin-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить параметры', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту модель?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row h-10 border border-1 rounded">
        <div class="d-flex justify-content-start">
            <p class="h4 m-4">ИТОГО ВЫРУЧКА</p>
            <div>
                <strong><p>План</p><strong>
                <strong><p>Факт</p><strong>
            </div>
        </div>
    </div>
</div>
