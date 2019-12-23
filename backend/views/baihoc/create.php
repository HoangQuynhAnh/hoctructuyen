<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Baihoc */

$this->title = 'Create Baihoc';
$this->params['breadcrumbs'][] = ['label' => 'Baihocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baihoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
