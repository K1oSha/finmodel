<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sort */

$this->title = 'Добавить сорт';
$this->params['breadcrumbs'][] = ['label' => 'Сорта культур', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
