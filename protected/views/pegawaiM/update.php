<?php
/* @var $this PegawaiMController */
/* @var $model PegawaiM */

$this->breadcrumbs=array(
	'Pegawai Ms'=>array('index'),
	$model->pegawai_id=>array('view','id'=>$model->pegawai_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PegawaiM', 'url'=>array('index')),
	array('label'=>'Create PegawaiM', 'url'=>array('create')),
	array('label'=>'View PegawaiM', 'url'=>array('view', 'id'=>$model->pegawai_id)),
	array('label'=>'Manage PegawaiM', 'url'=>array('admin')),
);
?>

<h1>Update PegawaiM <?php echo $model->pegawai_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>