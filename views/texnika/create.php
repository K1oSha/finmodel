<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Texnika */

$this->title = 'Добавление техники в реестр';
$this->params['breadcrumbs'][] = ['label' => 'Реестр техники ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ' '.$this->title;
?>
<div class="texnika-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
