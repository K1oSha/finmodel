<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use app\assets\AuthAsset;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;
AuthAsset::register($this);

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register col-lg-6 col-xxl-4">
            <div class="text-center">
                <p class="text-muted fs-5">Зарегистрируйтесь в личном кабинете владельца бизнеса и начните управлять компанией</p>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'register-form',
                'fieldConfig' => [
                    'enableLabel'=>false,
                    'options' => ['class'=> ''],
                    'inputOptions' => ['class'=> 'form-control p-3 mt-3'],

                    ]
                ]); ?>

            <?= $form->field($model, 'companyName')->textInput(['autofocus' => true, 'placeholder'=> $model->getAttributePlaceholder('companyName')]) ?>

            <?= $form->field($model, 'fullName')->textInput(['placeholder'=> $model->getAttributePlaceholder('fullName')]) ?>

            <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                'mask' => '+9[99]-999-9999999'])?>

            <?= $form->field($model, 'email')->textInput(['placeholder'=> $model->getAttributePlaceholder('email')]) ?>
            
            <?= $form->field($model, 'password')->passwordInput(['placeholder'=> $model->getAttributePlaceholder('password')]) ?>
            
            <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder'=> $model->getAttributePlaceholder('password_repeat')]) ?>
            
            <?= $form->field($model, 'verifyCode')->widget(Captcha::class) ?>

            <div class="form-group">
                <div class="text-center mt-4">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-outline-primary btn-lg', 'name' => 'register-button']) ?>
                </div>
                <div class="mt-3 text-center">
                    <p class="text-muted fs-5 m-0">Если у вас уже есть личный кабинет, тогда можете</p><a href="#" class="fs-5 text-primary">Войти</a>
                </div>
            </div>
        
            <?php ActiveForm::end(); ?>
</div>
