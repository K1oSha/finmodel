<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\FinModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fin-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sort_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'descriprion') ?>

    <?= $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'area_house') ?>

    <?php // echo $form->field($model, 'electro_price') ?>

    <?php // echo $form->field($model, 'water_price') ?>

    <?php // echo $form->field($model, 'price_culture') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
