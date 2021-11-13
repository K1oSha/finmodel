<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Texnika */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="texnika-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'texnikacol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toplivo')->textInput() ?>

    <?= $form->field($model, 'norma')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
