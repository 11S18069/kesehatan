<?php
/* @var $this PegawaiMController */
/* @var $model PegawaiM */

$this->breadcrumbs=array(
	'Pegawai Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PegawaiM', 'url'=>array('index')),
	array('label'=>'Manage PegawaiM', 'url'=>array('admin')),
);
?>

<h1>Create PegawaiM</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>