<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */

use app\assets\AuthAsset;

use yii\bootstrap5\Html;
use yii\captcha\Captcha;
use yii\widgets\ActiveForm;

AuthAsset::register($this);

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register col-lg-6 col-xxl-4">
            <div class="text-center">
                <p class="text-muted fs-5"><?=Yii::t('app', 'Зарегистрируйтесь в личном кабинете')?></p>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'register-form',
                'fieldConfig' => [
                    'options' => ['class'=> ''],
                    'inputOptions' => ['class'=> 'form-control p-3 mt-3'],

                    ]
                ]); ?>

            <?= $form->field($model, 'fullName')->textInput(['placeholder'=> $model->getAttributePlaceholder('fullName')])->label(false) ?>


            <?= $form->field($model, 'email')->textInput(['placeholder'=> $model->getAttributePlaceholder('email')])->label(false) ?>
            
            <?= $form->field($model, 'password')->passwordInput(['placeholder'=> $model->getAttributePlaceholder('password')])->label(false) ?>
            
            <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder'=> $model->getAttributePlaceholder('password_repeat')])->label(false) ?>


            <div class="form-group">
                <div class="text-center mt-4">
                    <?= Html::submitButton(Yii::t('app','Зарегистрироваться'), ['class' => 'btn btn-outline-primary btn-lg', 'name' => 'register-button']) ?>
                </div>
                <div class="mt-3 text-center">
                    <p class="text-muted fs-5 m-0"><?=Yii::t('app', 'Если у вас уже есть личный кабинет, тогда можете')?></p><a href="#" class="fs-5 text-primary"><?=Yii::t('app', 'Войти')?></a>
                </div>
            </div>
        
            <?php ActiveForm::end(); ?>
</div>
