<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */


use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('app','Войти в личный кабинет');

\app\assets\AuthAsset::register($this)
?>

<div class="site-login col-lg-5 col-xxl-3 ">
    <div class="col-sm-8 offset-sm-2 ">
        <?php $form = ActiveForm::begin([
            'id' => 'register-form',
            'fieldConfig' => [
                'options' => ['class'=> ''],
                'inputOptions' => ['class'=> 'form-control p-3 mt-3'],

            ]
        ]); ?>

        <?= $form->field($model, 'email')->textInput(['placeholder'=> $model->getAttributeLabel('email')])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder'=> $model->getAttributeLabel('password')])->label(false) ?>
        <div class="form-group">
            <div class="text-center mt-4">
                <?= Html::submitButton(Yii::t('app','Войти'), ['class' => 'btn btn-outline-primary btn-lg', 'name' => 'register-button']) ?>
        </div>
            <div class="mt-5 text-left fs-6">
                <p class="text-muted m-0"><?= Yii::t('app','Если у вас еще нет личного кабинета, тогда')?></p><a href="register" class="text-primary"><?= Yii::t('app','Зарегистрируйтесь')?></a>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>
