<?php

use app\models\Cultura;
use app\models\Sort;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */

$this->title = 'Создание финансовой модели';
$this->params['breadcrumbs'][] = ['label' => 'Fin Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fin-model-create">

    <h3><?= Html::encode($this->title) ?></h3>
   
    <div class="col-5">
    <p class="h5">
        Задайте вводные данные для составления финансовой модели по выращиванию культуры: 
        <? $sort = Sort::findOne($model->sort_id);$culture = Cultura::findOne($sort->cultura_id);  echo Html::a($culture->name  . ' '.  $sort->name  ,['/sort/view', 'id' => $model->sort_id])?>
    </p>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
    

</div>
