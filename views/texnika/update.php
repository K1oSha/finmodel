<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Texnika */

$this->title = 'Изменение записи : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Реестр техники', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="texnika-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
