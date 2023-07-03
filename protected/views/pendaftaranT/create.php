<?php
/* @var $this PendaftaranTController */
/* @var $model PendaftaranT */

$this->breadcrumbs=array(
	'Pendaftaran Ts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PendaftaranT', 'url'=>array('index')),
	array('label'=>'Manage PendaftaranT', 'url'=>array('admin')),
);
?>

<h1>Create PendaftaranT</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>