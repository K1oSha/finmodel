<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\assets\AuthAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;

AppAsset::register($this);
AuthAsset::register($this);
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
    <body class="h-100">
        <?php $this->beginBody() ?>

        <!-- preloader -->
        <div class="preloader-it">
            <div class="spinner-border text-dark" role="status"></div>
        </div>
        <!-- preloader end -->

        <div class="container-fluid d-flex justify-content-center align-items-center flex-column header-padding-top">
                <div class="row heading text-center col-lg-7 col-xxl-3">
                    <div class="col">
                        <img src="/images/logo_wide.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <p class="service-title" >Dig Well</p>
                        <p class="service-subtitle"><?= Yii::t('app','Управляйте бизнесом умело')?></p>
                    </div>
                    <div class="label-padding" style="text-align: center ">
                        <h2 class="font-weight-bold title fs-4"><strong><?= Html::encode($this->title) ?></strong></h2>
                    </div>
                </div>
                <?= Alert::widget() ?>
                <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>