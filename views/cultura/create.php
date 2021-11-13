<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cultura */

$this->title = 'Create Cultura';
$this->params['breadcrumbs'][] = ['label' => 'Culturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
