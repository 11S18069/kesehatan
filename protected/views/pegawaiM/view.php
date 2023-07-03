<?php
/* @var $this PegawaiMController */
/* @var $model PegawaiM */

$this->breadcrumbs=array(
	'Pegawai Ms'=>array('index'),
	$model->pegawai_id,
);

$this->menu=array(
	array('label'=>'List PegawaiM', 'url'=>array('index')),
	array('label'=>'Create PegawaiM', 'url'=>array('create')),
	array('label'=>'Update PegawaiM', 'url'=>array('update', 'id'=>$model->pegawai_id)),
	array('label'=>'Delete PegawaiM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pegawai_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PegawaiM', 'url'=>array('admin')),
);
?>

<h1>View PegawaiM #<?php echo $model->pegawai_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pegawai_id',
		'pegawai_nama',
		'ruangan_id',
	),
)); ?>
