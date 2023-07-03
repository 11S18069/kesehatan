<?php
/* @var $this PendaftaranTController */
/* @var $model PendaftaranT */

$this->breadcrumbs=array(
	'Pendaftaran Ts'=>array('index'),
	$model->pendaftaran_id,
);

$this->menu=array(
	array('label'=>'List PendaftaranT', 'url'=>array('index')),
	array('label'=>'Create PendaftaranT', 'url'=>array('create')),
	array('label'=>'Update PendaftaranT', 'url'=>array('update', 'id'=>$model->pendaftaran_id)),
	array('label'=>'Delete PendaftaranT', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pendaftaran_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PendaftaranT', 'url'=>array('admin')),
);
?>

<h1>View PendaftaranT #<?php echo $model->pendaftaran_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pendaftaran_id',
		'ruangan_id',
		'obat_id',
		'pasien_id',
		'harga',
		'pegawai_id',
	),
)); ?>
