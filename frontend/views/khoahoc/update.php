<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoahoc */

$this->title = 'Cập nhật khoá học: ' . $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Khoahocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-panel">
	<nav class="navbar navbar-expand-lg " color-on-scroll="500">
		<div class="container-fluid">
		</div>
	</nav>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-plain table-plain-bg">
						<h1><?= Html::encode($this->title) ?></h1>
    					<?= $this->render('_form', [
      					  'model' => $model,
   							 ]) ?>

<style>
.card.card-plain.table-plain-bg{
padding: 10px;
}
</style>