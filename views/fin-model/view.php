<?php

use app\models\Cultura;
use app\models\Expense;
use app\models\Sort;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '/Финансовые модели/', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fin-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить параметры', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту модель?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?
    $arrayCapital = Expense::find()->where(['in_stock' => 1, 'fin_model_id' => $model->id])->all();
    $dataProvider = new ArrayDataProvider(['allModels' => $arrayCapital]);
    $itogo = 0;

    foreach ($arrayCapital as $one)
        $itogo+=$one->price;

    $sort = Sort::findOne($model->sort_id);
    $cultura = Cultura::findOne($sort->cultura_id);
    $nameCulturi = $cultura->name.' «'.$sort->name.'»';
    $averangePrice = 66;
    $priceFromRossStat = 35;
    ?>
    <!-- Кнопка-триггер модального окна -->
    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Расчёт капитальных вложений
    </button>

    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModalEconomy">
        Расчёт экономической эффективности
    </button>

    <!-- Модальное окно -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" data-bs-toggle="tooltip" data-bs-placement="top" title="Единовременные траты необходимые для начала возделывания">Капитальные вложения <i class="far fa-question-circle"></i></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <div class="fin-model-create row">

                        <div>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'columns' => [
                                    [
                                        'attribute' => 'name',
                                        'label' => 'Название'
                                    ],
                                    [
                                        'attribute' => 'price',
                                        'label' => 'Стоимость р.'
                                    ],
                                ],
                            ]); ?>
                            <h2 style="text-align: right">Итого: <b><?= $itogo?></b></h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="exampleModalEconomy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Оценка экономической эффективности культуры <?=$nameCulturi?></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p>Будет ли ваш продукт дешевле или дороже чем средний продкут на полке</p>
                    <br>
                    <div class="col-12">

                        <? if($averangePrice <= $priceFromRossStat * 1.2):?>

                            <h4 style="font-weight: 300" >Себестоимость производимого вами сорта за 1кг: <b style="color: green"><?= $averangePrice?></b></h4>
                            <h4 style="font-weight: 300" > Стоимость сорта продукции, сложившаяся в данном регоине: <b><?= $priceFromRossStat?></b></h4>
                            <br>
                            <h4 style="font-weight: 400">Вывод: товар обладает высокой конкурентноспособностью на рынке</h4>

                        <?  else: ?>
                            <?if($averangePrice <= $priceFromRossStat * 1.4):?>
                                <h4 style="font-weight: 300" >Себестоимость производимого вами сорта за 1кг: <b style="color:orange"><?= $averangePrice?></b></h4>
                                <h4 style="font-weight: 300" > Стоимость сорта продукции, сложившаяся в данном регоине: <b><?= $priceFromRossStat?></b></h4>
                                <br>
                                <h4 style="font-weight: 400">Вывод: товар обладает средней конкурентноспособностью на рынке</h4>
                            <?else:?>
                                <h4 style="font-weight: 300" >Себестоимость производимого вами сорта за 1кг: <b style="color: red"><?= $averangePrice?></b></h4>

                                <h4 style="font-weight: 300" > Стоимость сорта продукции, сложившаяся в данном регоине: <b><?= $priceFromRossStat?></b></h4>
                                <br>
                                <h4 style="font-weight: 400">Вывод: товар обладает низкой конкурентноспособностью на рынке</h4>
                            <?endif;?>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </div>>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <div style="float:right">
    <?
        echo Html::a('<i class="fa fa-4x fa-file-pdf text-danger"></i>', ['/fin-model/get-pdf', 'id'=>$model->id], [
        'target'=>'_blank', 
        'data-toggle'=>'tooltip', 
        'title'=>'Экспортировать в PDF'
        ]);
    ?>
    </div>
    <div class="row h-10 mt-3">
    <h1 class="text-primary mega-label">ДОХОДЫ</h1>
        <div class="d-flex justify-content-start">
            <p class="h4 m-4 fin-hidden">ААААА ААААААА</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="text-white mt-2">План</p></strong>
                    <strong><p class="text-white">Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 1</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 2</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 3</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 4</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 5</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 6</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 7</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 8</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 9</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 10</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 11</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 12</p></strong>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4 text-muted">ИТОГО ВЫРУЧКА</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i; ?>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2"><?= $model->{$exp_var_name} ?></p></strong>
                    <strong><p><?= $model->{$prib_var_name} ?></p></strong>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4"><?= Sort::findOne($model->sort_id)->name;?>  <a href="<?= Url::to(['/fin-model/update-income', 'id'=>$model->id])?>"><i class="fas fa-pen"></i></a></p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i; ?>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2"><?= $model->{$exp_var_name} ?></p></strong>
                    <strong><p><?= $model->{$prib_var_name} ?></p></strong>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row h-10 mt-3">
    <h1 class="text-primary mt-3 mega-label">РАСХОДЫ</h1>
        <div class="d-flex justify-content-start">
            <p class="h4 m-4 fin-hidden">ААААА ААААААА</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="text-white mt-2">План</p></strong>
                    <strong><p class="text-white">Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 1</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 2</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 3</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 4</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 5</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 6</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 7</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 8</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 9</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 10</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 11</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 12</p></strong>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4 text-muted">ИТОГО РАСХОД</p>
            <? 
                $total = ['exp' => [],'prib'=>[]];
                foreach ($expenses as $expense) {
                     for ($i = 1; $i <=12; $i++) {
                        $exp_var_name = 'exp_' . $i;
                        $prib_var_name = 'prib_' . $i;
                        $total['exp'][$i] += $expense->{$exp_var_name};
                        $total['prib'][$i] += $expense->{$prib_var_name};
                     }
                }
            ?> 
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) {?>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2"><?= $total['exp'][$i] ?></p></strong>
                    <strong><p><?= $total['prib'][$i] ?></p></strong>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
    <? foreach ($expenses as $expense) {?>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4"><?= $expense->name?>  <a href="<?= Url::to(['/expense/update', 'id'=>$expense->id])?>"><i class="fas fa-pen"></i></a></p> 
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i; ?>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2"><?= $expense->{$exp_var_name} ?></p></strong>
                    <strong><p><?= $expense->{$prib_var_name} ?></p></strong>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
    <? } ?>
    <strong>
        <a class=" h4 text-success" href="<?= Url::to(['/expense/create', 'fin_model_id' => $model->id]) ?>"> + Добавить новую статью расходов</a>
    </strong>

    <div class="row h-10 mt-3">
    <h1 class="text-primary mt-3 mega-label">НАЛОГИ</h1>
        <div class="d-flex justify-content-start">
            <p class="h4 m-4 fin-hidden">ААААА ААААААА</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="text-white mt-2">План</p></strong>
                    <strong><p class="text-white">Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 1</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 2</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 3</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 4</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 5</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 6</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 7</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 8</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 9</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 10</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 11</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 12</p></strong>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4 text-muted">ИТОГО НАЛОГ</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i; ?>
                    <div class="d-flex align-items-center flex-column fin-item">
                        <strong><p class="mt-2"><?= $model->{$exp_var_name} * 0.06 ?></p></strong>
                        <strong><p><?= $model->{$prib_var_name} * 0.06 ?></p></strong>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4">ЕСХН</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i; ?>
                    <div class="d-flex align-items-center flex-column fin-item">
                        <strong><p class="mt-2"><?= $model->{$exp_var_name} * 0.06 ?></p></strong>
                        <strong><p><?= $model->{$prib_var_name} * 0.06 ?></p></strong>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>

    <div class="row h-10 mt-3">
    <h1 class="text-primary mt-3 mega-label">ИТОГИ</h1>
        <div class="d-flex justify-content-start">
            <p class="h4 m-4 fin-hidden">ААААА ААААААА</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="text-white mt-2">План</p></strong>
                    <strong><p class="text-white">Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 1</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 2</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 3</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 4</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 5</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 6</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white">54000</p></strong>
                    <strong><p class="month">Месяц 7</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 8</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 9</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 10</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 11</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="text-white mt-2">54000</p></strong>
                    <strong><p class="month">Месяц 12</p></strong>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4 text-muted">ДОХОДЫ</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i; ?>
                    <div class="d-flex align-items-center flex-column fin-item">
                        <strong><p class="mt-2"><?= $model->{$exp_var_name}?></p></strong>
                        <strong><p><?= $model->{$prib_var_name} ?></p></strong>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4">РАСХОДЫ</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? for ($i = 1; $i <=12; $i++) {?>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2"><?= $total['exp'][$i] ?></p></strong>
                    <strong><p><?= $total['prib'][$i] ?></p></strong>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4">ЧИСТАЯ ПРИБЫЛЬ</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <? 
                $total_exp = 0;
                $total_prib = 0;
                for ($i = 1; $i <=12; $i++) {
                    $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i;
                    $total_exp += $model->{$exp_var_name} * 0.94 -  $total['exp'][$i];
                    $total_prib += $model->{$prib_var_name} * 0.94 -  $total['prib'][$i];
                    ?>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p id="exp_<?= $i?>" class="mt-2"><?= $model->{$exp_var_name} * 0.94 -  $total['exp'][$i] ?></p></strong>
                    <strong><p id="prib_<?= $i?>"><?= $model->{$exp_var_name} * 0.94 - $total['prib'][$i] ?></p></strong>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="h4 m-4">ИТОГОВАЯ ПРИБЫЛЬ ПО ПЛАНУ: <span class="text-success"><?= $total_exp ?> рублей</span></p>
            <p class="h4 m-4">ИТОГОВАЯ ПРИБЫЛЬ ПО ФАКТУ: <span class="text-success"><?= $total_prib ?>рублей</span></p>
        </div>
    </div>
    <h4 class="mt-4 mb-2">График чистой прибыли</h4>
    <canvas id="planChart"></canvas>
    <canvas id="factChart"></canvas>
</div>
