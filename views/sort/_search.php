<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Sort */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sort-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'сultura_id') ?>

    <?= $form->field($model, 'plus') ?>

    <?= $form->field($model, 'minus') ?>

    <?php // echo $form->field($model, 'profit') ?>

    <?php // echo $form->field($model, 'tovarnost') ?>

    <?php // echo $form->field($model, 'time_grow') ?>

    <?php // echo $form->field($model, 'lejcost') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'area_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
