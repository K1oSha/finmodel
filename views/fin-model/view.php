<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FinModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fin Models', 'url' => ['index']];
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

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
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
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4">Картофель "Алена"</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
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
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4">Аренда земли</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="fin-label h4 m-4">Заработная плата</p>
            <div class="d-flex align-items-center flex-row">
                <div class="d-flex align-items-center flex-column fin-item" >
                    <strong><p class="mt-2">План</p></strong>
                    <strong><p>Факт</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
            </div>
        </div>
    </div>
    <strong>
        <a class="text-success" href="#"> + Добавить новую статью расходов</a>
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
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
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
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
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
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
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
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
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
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
                <div class="d-flex align-items-center flex-column fin-item">
                    <strong><p class="mt-2">54000</p></strong>
                    <strong><p>54000</p></strong>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-10 border border-1 rounded mt-3">
        <div class="d-flex justify-content-start">
            <p class="h4 m-4">ИТОГОВАЯ ПРИБЫЛЬ ЗА ГОД: <span class="text-success">1 231 123 руб.</span></p>
        </div>
    </div>
    
</div>
