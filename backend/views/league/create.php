<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\League $model */

$this->title = 'Create League';
$this->params['breadcrumbs'][] = ['label' => 'Leagues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="league-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
