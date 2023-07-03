<?php
/* @var $this ObatMController */
/* @var $model ObatM */

$this->breadcrumbs=array(
	'Obat Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObatM', 'url'=>array('index')),
	array('label'=>'Manage ObatM', 'url'=>array('admin')),
);
?>

<h1>Create ObatM</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>