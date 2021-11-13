<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Texnika */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="texnika-form row">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-6">
        <?= $form->field($model, 'name')->textInput() ?>


        <?= $form->field($model, 'toplivo')->textInput() ?>

        <?= $form->field($model, 'norma')->textInput() ?>

        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group mt-3">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
