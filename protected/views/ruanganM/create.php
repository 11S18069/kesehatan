<?php
/* @var $this RuanganMController */
/* @var $model RuanganM */

$this->breadcrumbs=array(
	'Ruangan Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RuanganM', 'url'=>array('index')),
	array('label'=>'Manage RuanganM', 'url'=>array('admin')),
);
?>

<h1>Create RuanganM</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>