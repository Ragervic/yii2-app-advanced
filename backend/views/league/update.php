<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\League $model */

$this->title = 'Update League: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Leagues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="league-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
