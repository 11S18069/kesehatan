<?php
/* @var $this PendaftaranTController */
/* @var $model PendaftaranT */

$this->breadcrumbs=array(
	'Pendaftaran Ts'=>array('index'),
	$model->pendaftaran_id=>array('view','id'=>$model->pendaftaran_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PendaftaranT', 'url'=>array('index')),
	array('label'=>'Create PendaftaranT', 'url'=>array('create')),
	array('label'=>'View PendaftaranT', 'url'=>array('view', 'id'=>$model->pendaftaran_id)),
	array('label'=>'Manage PendaftaranT', 'url'=>array('admin')),
);
?>

<h1>Update PendaftaranT <?php echo $model->pendaftaran_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>