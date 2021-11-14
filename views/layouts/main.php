<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\widgets\Breadcrumbs;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- preloader -->
<div class="preloader-it">
    <div class="spinner-border text-dark" role="status"></div>
</div>
<!-- preloader end -->

<main>
    <div class="vh-100 flex-column d-flex flex-shrink-0 bg-white shadow" style="width: 4.5rem; z-index: 100">
        <a href="/" class="text-center p-3">
            <img width="30" height="30" class="img-fluid" src="/images/logo.png">
        </a>
        <? $user = \app\models\User::findOne(Yii::$app->user->getId())?>
        <? if($user->role == 'farmer'):?>
        <ul style="overflow-x: hidden; overflow-y: auto" class="sidebar-scroll nav nav-pills nav-flush mb-auto text-center">
            <li class="nav-item flex-fill">
                <?= Html::a('<i class="fas fa-2x  fa-home"></i>', ['site/index'], [
                    'class' => 'nav-link text-secondary py-3 border-bottom',
                    'title' => 'Главная',
                    'data-bs-toggle' => 'tooltip',
                    'data-bs-placement' => 'right',
                ]) ?>
            </li>
            <li class="nav-item flex-fill">
                <?= Html::a('<i class="fas fa-2x  fa-clipboard-list"></i>', ['/fin-model'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => 'Финансовые модели',
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                ]) ?>
            </li>
            <li class="nav-item flex-fill">
                <?= Html::a('<i class="fas fa-2x fa-sign-out-alt"></i>', ['/site/logout'], [
                    'class' => 'nav-link text-secondary py-3 border-bottom',
                    'title' => Yii::t('app', 'Выйти'),
                    'data-bs-toggle' => 'tooltip',
                    'data-bs-placement' => 'right',
                ]) ?>
            </li>
        </ul>
        <?else:?>
            <ul style="overflow-x: hidden; overflow-y: auto" class="sidebar-scroll nav nav-pills nav-flush mb-auto text-center">
                <li class="nav-item flex-fill">
                    <?= Html::a('<i class="fas fa-2x  fa-home"></i>', ['site/index'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => 'Главная',
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                    ]) ?>
                </li>
                <li class="nav-item flex-fill">
                    <?= Html::a('<i class="fas fa-2x fa-search-location"></i>', ['/region'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => 'Регионы',
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                    ]) ?>
                </li>
                <li class="nav-item flex-fill">
                    <?= Html::a('<i class="fas fa-2x fa-list-alt"></i>', ['/area'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => 'Районы',
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                    ]) ?>
                </li>
                <li class="nav-item flex-fill">
                    <?= Html::a('<i class="fas fa-2x fa-seedling"></i>', ['/cultura'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => 'Культуры',
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                    ]) ?>
                </li>
                <li class="nav-item flex-fill">
                    <?= Html::a('<i class="fas fa-2x fa-leaf"></i>', ['/sort'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => 'Сорта',
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                    ]) ?>
                </li>
                <li class="nav-item flex-fill">
                    <?= Html::a('<i class="fas fa-2x fa-sign-out-alt"></i>', ['/site/logout'], [
                        'class' => 'nav-link text-secondary py-3 border-bottom',
                        'title' => Yii::t('app', 'Выйти'),
                        'data-bs-toggle' => 'tooltip',
                        'data-bs-placement' => 'right',
                    ]) ?>
                </li>
            </ul>
        <?endif;?>
    </div>
    <div style="overflow: auto" class="p-0 flex-fill">
        <div class="p-3 container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>