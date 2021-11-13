<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = Yii::t('app','Восстановить пароль');

\app\assets\AuthAsset::register($this)
?>

<div class="site-login col-lg-5 col-xxl-3">
    <div class="col-sm-8 offset-sm-2 ">
        <?php $form = ActiveForm::begin([
            'id' => 'register-form',
            'fieldConfig' => [
                'enableLabel'=>false,
                'options' => ['class'=> ''],
                'inputOptions' => ['class'=> 'form-control p-3 mt-3'],

            ]
        ]); ?>

        <?= $form->field($model, 'email')->textInput(['placeholder'=> $model->getAttributeLabel('email')]) ?>

        <div class="form-group">
            <div class="text-center mt-5">
                <?= Html::submitButton(Yii::t('app','Выслать новый пароль'), ['class' => 'btn btn-outline-primary btn-lg', 'name' => 'register-button']) ?>
            </div>

            <div class="mt-4 fs-6" style="text-align: center">
                <a href="login" class="text-primary"><?= Yii::t('app','Войти в личный кабинет')?></a>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>
