<?php
/* @var $this RuanganMController */
/* @var $model RuanganM */

$this->breadcrumbs=array(
	'Ruangan Ms'=>array('index'),
	$model->ruangan_id,
);

$this->menu=array(
	array('label'=>'List RuanganM', 'url'=>array('index')),
	array('label'=>'Create RuanganM', 'url'=>array('create')),
	array('label'=>'Update RuanganM', 'url'=>array('update', 'id'=>$model->ruangan_id)),
	array('label'=>'Delete RuanganM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ruangan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RuanganM', 'url'=>array('admin')),
);
?>

<h1>View RuanganM #<?php echo $model->ruangan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ruangan_id',
		'ruangan_nama',
	),
)); ?>
