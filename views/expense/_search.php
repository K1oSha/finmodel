<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Expense */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expense-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'texnika_id') ?>

    <?= $form->field($model, 'fin_model_id') ?>

    <?= $form->field($model, 'exp_1') ?>

    <?php // echo $form->field($model, 'prib_1') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'exp_2') ?>

    <?php // echo $form->field($model, 'prib_2') ?>

    <?php // echo $form->field($model, 'exp_3') ?>

    <?php // echo $form->field($model, 'prib_3') ?>

    <?php // echo $form->field($model, 'exp_4') ?>

    <?php // echo $form->field($model, 'prib_4') ?>

    <?php // echo $form->field($model, 'prib_5') ?>

    <?php // echo $form->field($model, 'exp_5') ?>

    <?php // echo $form->field($model, 'prib_6') ?>

    <?php // echo $form->field($model, 'exp_6') ?>

    <?php // echo $form->field($model, 'exp_7') ?>

    <?php // echo $form->field($model, 'prib_7') ?>

    <?php // echo $form->field($model, 'exp_8') ?>

    <?php // echo $form->field($model, 'prib_8') ?>

    <?php // echo $form->field($model, 'exp_9') ?>

    <?php // echo $form->field($model, 'prib_9') ?>

    <?php // echo $form->field($model, 'exp_10') ?>

    <?php // echo $form->field($model, 'prib_10') ?>

    <?php // echo $form->field($model, 'exp_11') ?>

    <?php // echo $form->field($model, 'prib_11') ?>

    <?php // echo $form->field($model, 'prib_12') ?>

    <?php // echo $form->field($model, 'exp_12') ?>

    <?php // echo $form->field($model, 'in_stock') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
