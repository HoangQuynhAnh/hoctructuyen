<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Giamgia */

$this->title = 'Tạo mới';
$this->params['breadcrumbs'][] = ['label' => 'Giamgias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-panel">
	<nav class="navbar navbar-expand-lg " color-on-scroll="500">
		<div class="container-fluid">
		</div>
	</nav>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
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
								padding: 20px;
							}
						</style>
