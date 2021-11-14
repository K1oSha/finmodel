<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Expense */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expense-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texnika_id')->textInput() ?>

    <?= $form->field($model, 'fin_model_id')->textInput() ?>

    <?= $form->field($model, 'exp_1')->textInput() ?>

    <?= $form->field($model, 'prib_1')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'exp_2')->textInput() ?>

    <?= $form->field($model, 'prib_2')->textInput() ?>

    <?= $form->field($model, 'exp_3')->textInput() ?>

    <?= $form->field($model, 'prib_3')->textInput() ?>

    <?= $form->field($model, 'exp_4')->textInput() ?>

    <?= $form->field($model, 'prib_4')->textInput() ?>

    <?= $form->field($model, 'prib_5')->textInput() ?>

    <?= $form->field($model, 'exp_5')->textInput() ?>

    <?= $form->field($model, 'prib_6')->textInput() ?>

    <?= $form->field($model, 'exp_6')->textInput() ?>

    <?= $form->field($model, 'exp_7')->textInput() ?>

    <?= $form->field($model, 'prib_7')->textInput() ?>

    <?= $form->field($model, 'exp_8')->textInput() ?>

    <?= $form->field($model, 'prib_8')->textInput() ?>

    <?= $form->field($model, 'exp_9')->textInput() ?>

    <?= $form->field($model, 'prib_9')->textInput() ?>

    <?= $form->field($model, 'exp_10')->textInput() ?>

    <?= $form->field($model, 'prib_10')->textInput() ?>

    <?= $form->field($model, 'exp_11')->textInput() ?>

    <?= $form->field($model, 'prib_11')->textInput() ?>

    <?= $form->field($model, 'prib_12')->textInput() ?>

    <?= $form->field($model, 'exp_12')->textInput() ?>

    <?= $form->field($model, 'in_stock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
