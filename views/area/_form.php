<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Area */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(\app\models\Region::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'recomended_culture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cultura_id')->textInput() ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Добавить район', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
