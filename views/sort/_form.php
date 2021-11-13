<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sort */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sort-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'сultura_id')->textInput() ?>

    <?= $form->field($model, 'plus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profit')->textInput() ?>

    <?= $form->field($model, 'tovarnost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_grow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lejcost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'area_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
