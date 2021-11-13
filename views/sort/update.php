<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sort */

$this->title = 'Изменение сорта культуры: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'сultura_id' => $model->сultura_id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="sort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
