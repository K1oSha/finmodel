<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sort */

$this->title = 'Update Sort: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'сultura_id' => $model->сultura_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
