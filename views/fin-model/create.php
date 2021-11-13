<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */

$this->title = 'Create Fin Model';
$this->params['breadcrumbs'][] = ['label' => 'Fin Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fin-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
