<?php
/* @var $this ObatMController */
/* @var $model ObatM */

$this->breadcrumbs=array(
	'Obat Ms'=>array('index'),
	$model->obat_id,
);

$this->menu=array(
	array('label'=>'List ObatM', 'url'=>array('index')),
	array('label'=>'Create ObatM', 'url'=>array('create')),
	array('label'=>'Update ObatM', 'url'=>array('update', 'id'=>$model->obat_id)),
	array('label'=>'Delete ObatM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->obat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObatM', 'url'=>array('admin')),
);
?>

<h1>View ObatM #<?php echo $model->obat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'obat_id',
		'obat_nama',
		'obat_jumlah',
		'obat_harga',
	),
)); ?>
