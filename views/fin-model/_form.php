<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fin-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descriprion')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'electro_price')->textInput() ?>

    <?= $form->field($model, 'water_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => ' mt-4 btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
