<?php

use app\models\Area;
use app\models\Cultura;
use app\models\Region;
use yii\bootstrap5\ActiveForm;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */

$this->title = 'Создание финансовой модели';
$this->params['breadcrumbs'][] = ['label' => '/Финансовые модели/', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fin-model-create row">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="col-7">
        <?php Pjax::begin(); ?>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(),'id','name'), ['id'=>'regionDropdown','prompt' => 'Выберите регион']) ?>
        <?= $form->field($model, 'area_id')->dropDownList([], ['id'=>'areaDropdown']) ?>
        <?= $form->field($model, 'cultura_id')->dropDownList(ArrayHelper::map(Cultura::find()->all(), 'id', 'name')) ?>
        <?= $form->field($model, 'is_greenhouse')->checkbox() ?>
        <div class="form-group">
            <?= Html::submitButton('Далее', ['class' => 'btn btn-outline-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>

        <? if ($result == 1) {
        echo "<h3 class=' mt-3 text-success'> Взращивание культуры рекомендуется </h3> ";
        echo "<p>" . Area::findOne($model->area_id)->recomended_culture.  "</p>";
        ?>
        <h4 class="mt-4">Подходящие сорта культуры</h4>
        <div style="line-height: 0.5">
            <p>Ниже представлены сорта, которые обеспечивают стабильное</p>
            <p>получение продукции хорошего качества в данном регионе.</p>
        </div>
    </div>


        
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'name',
                'plus',
                'minus',
                'profit',
                [
                    'attribute' => 'tovarnost',
                    'label' =>  '<span data-bs-toggle="tooltip" data-bs-placement="top" title="Количество продукции, которое попадает на рынок">
                    Товарность <i class="far fa-question-circle"></i>
                  </span>',
                    'encodeLabel' => false
                ],
                [
                    'attribute' => 'lejcost',
                    'label' =>  '<span data-bs-toggle="tooltip" data-bs-placement="top" title="Сохраняемость собранной продукции в нормальных условиях">
                    Лежкость <i class="far fa-question-circle"></i>
                  </span>',
                    'encodeLabel' => false
                ],
                'time_grow',
                ['class' => 'yii\grid\ActionColumn', 
                'template' => '{create}',
                'buttons' => [
                    'create' => function ($url,$model) {
                        return Html::a(
                        '<button class="btn btn-outline-primary">Выбрать данный сорт</button>', 
                        [Url::to('/fin-model/create'), 'sort_id'=>$model->id]);
                    },
                ],
                ],
            ],
        ]); ?>
           <? }?>
           <? if ($result == 2) {
            echo "<h3 class=' mt-3 text-danger'> Взращивание культуры не рекомендуется </h3> ";
            echo "<p>" . Area::findOne($model->area_id)->recomended_culture.  "</p>";
            ?>
            <h4 class="mt-4">Рекомендуемые варианты культур и их сорта</h4>
            <div style="line-height: 0.5">
                    <p>Ниже представлены сорта, которые обеспечивают стабильное</p>
                    <p>получение продукции хорошего качества в данном регионе.</p>
            </div>

        <h3><?=Cultura::findOne(Area::findOne($model->area_id)->cultura_id)->name; ?></h3>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'name',
                'plus',
                'minus',
                'profit',
                [
                    'attribute' => 'tovarnost',
                    'label' =>  '<span data-bs-toggle="tooltip" data-bs-placement="top" title="Количество продукции, которое попадает на рынок">
                    Товарность <i class="far fa-question-circle"></i>
                  </span>',
                    'encodeLabel' => false
                ],
                [
                    'attribute' => 'lejcost',
                    'label' =>  '<span data-bs-toggle="tooltip" data-bs-placement="top" title="Сохраняемость собранной продукции в нормальных условиях">
                    Лежкость <i class="far fa-question-circle"></i>
                  </span>',
                    'encodeLabel' => false
                ],
                'time_grow',
                ['class' => 'yii\grid\ActionColumn', 
                'template' => '{create}',
                'buttons' => [
                    'create' => function ($url,$model) {
                        return Html::a(
                        '<button class="btn btn-outline-primary">Выбрать данный сорт</button>', 
                        [Url::to('/fin-model/create'), 'sort_id'=>$model->id]);
                    },
                ],
                ],
            ],
        ]); ?>
            <?if (isset($dataProvider2)) {
            ?> 

            <h4 class="mt-4">Сорта выбранной вами культуры</h4>
            <?= GridView::widget([
                    'dataProvider' => $dataProvider2,
                    'columns' => [
                        'name',
                        'plus',
                        'minus',
                        'profit',
                        [
                            'attribute' => 'tovarnost',
                            'label' =>  '<span data-bs-toggle="tooltip" data-bs-placement="top" title="Количество продукции, которое попадает на рынок">
                            Товарность <i class="far fa-question-circle"></i>
                          </span>',
                            'encodeLabel' => false
                        ],
                        [
                            'attribute' => 'lejcost',
                            'label' =>  '<span data-bs-toggle="tooltip" data-bs-placement="top" title="Сохраняемость собранной продукции в нормальных условиях">
                            Лежкость <i class="far fa-question-circle"></i>
                          </span>',
                            'encodeLabel' => false
                        ],
                        'time_grow',
                        ['class' => 'yii\grid\ActionColumn', 
                        'template' => '{create}',
                        'buttons' => [
                            'create' => function ($url,$model) {
                                return Html::a(
                                '<button class="btn btn-outline-primary">Выбрать данный сорт</button>', 
                                [Url::to('/fin-model/create'), 'sort_id'=>$model->id]);
                            },
                        ],
                        ],
                    ],
                ]); ?>
            <?
            } ?>
           <? }?>
            
    
    <?php Pjax::end(); ?>
    
</div>
