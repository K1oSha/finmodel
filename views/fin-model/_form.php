<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fin-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sort_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descriprion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'area_house')->textInput() ?>

    <?= $form->field($model, 'electro_price')->textInput() ?>

    <?= $form->field($model, 'water_price')->textInput() ?>

    <?= $form->field($model, 'price_culture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
