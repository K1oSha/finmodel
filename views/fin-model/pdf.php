<?php

use yii\helpers\Html;

?>
<h1>Финансовая модель'<?=$model->name?>'.</h1>
<div>
    <div>
        <h2>Доходы</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td></td>
                <td>Месяц 1</td>
                <td>Месяц 2</td>
                <td>Месяц 3</td>
                <td>Месяц 4</td>
                <td>Месяц 5</td>
                <td>Месяц 6</td>
                <td>Месяц 7</td>
                <td>Месяц 8</td>
                <td>Месяц 9</td>
                <td>Месяц 10</td>
                <td>Месяц 11</td>
                <td>Месяц 12</td>
            </tr>
            </thead>
            <tbody>
               <tr>
                   <td>План</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i;?>
                        <td><?= $model->{$exp_var_name} ?></td>
                    <? } ?>
                </tr>
                <tr>
                   <td>Факт</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'prib_' . $i;?>
                        <td><?= $model->{$exp_var_name} ?></td>
                    <? } ?>
                </tr>
            </tbody>
        </table>

        <h2>Расходы</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td></td>
                <td>Месяц 1</td>
                <td>Месяц 2</td>
                <td>Месяц 3</td>
                <td>Месяц 4</td>
                <td>Месяц 5</td>
                <td>Месяц 6</td>
                <td>Месяц 7</td>
                <td>Месяц 8</td>
                <td>Месяц 9</td>
                <td>Месяц 10</td>
                <td>Месяц 11</td>
                <td>Месяц 12</td>
            </tr>
            </thead>
            <tbody>
            <? foreach ($expenses as $expense) {?>
               <tr>
                   <td>План</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i;?>
                        <td><?= $expense->{$exp_var_name} ?></td>
                    <? } ?>
                </tr>
                <tr>
                <td>Факт</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'prib_' . $i;?>
                        <td><?= $expense->{$exp_var_name} ?></td>
                    <? } ?>
                </tr>
                <?} ?>
            </tbody>
        </table>

        <h2>Налоги</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td></td>
                <td>Месяц 1</td>
                <td>Месяц 2</td>
                <td>Месяц 3</td>
                <td>Месяц 4</td>
                <td>Месяц 5</td>
                <td>Месяц 6</td>
                <td>Месяц 7</td>
                <td>Месяц 8</td>
                <td>Месяц 9</td>
                <td>Месяц 10</td>
                <td>Месяц 11</td>
                <td>Месяц 12</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                   <td>План</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i;?>
                        <td> <?= $model->{$exp_var_name} * 0.06 ?></td>
                    <? } ?>
                </tr>
                <tr>
                <td>Факт</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'prib_' . $i;?>
                        <td><?= $model->{$exp_var_name} * 0.06 ?></td>
                    <? } ?>
                </tr>
           
            </tbody>
        </table>

        <h2>Чистая прибыль</h2>
        <? $total_exp = 0;
                $total_prib = 0;
                for ($i = 1; $i <=12; $i++) {
                    $exp_var_name = 'exp_' . $i; $prib_var_name = 'prib_' . $i;
                    $total_exp += $model->{$exp_var_name} * 0.94 -  $total['exp'][$i];
                    $total_prib += $model->{$prib_var_name} * 0.94 -  $total['prib'][$i];
                }
                    ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td></td>
                <td>Месяц 1</td>
                <td>Месяц 2</td>
                <td>Месяц 3</td>
                <td>Месяц 4</td>
                <td>Месяц 5</td>
                <td>Месяц 6</td>
                <td>Месяц 7</td>
                <td>Месяц 8</td>
                <td>Месяц 9</td>
                <td>Месяц 10</td>
                <td>Месяц 11</td>
                <td>Месяц 12</td>
            </tr>
            </thead>
            <tbody>
               <tr>
                   <td>План</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'exp_' . $i;?>
                   <td><?= $model->{$exp_var_name} * 0.94 -  $total['exp'][$i] ?></td>
                    <? } ?>
                </tr>
                <tr>
                   <td>Факт</td>
                   <? for ($i = 1; $i <=12; $i++) { $exp_var_name = 'prib_' . $i;?>
                   <td><?= $model->{$exp_var_name} * 0.94 -  $total['prib'][$i] ?></td>
                    <? } ?>
                </tr>
            </tbody>
        </table>
</div>
