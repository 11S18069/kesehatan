<?php
/* @var $this LoginpemakaiMController */
/* @var $model LoginpemakaiM */

$this->breadcrumbs=array(
	'Loginpemakai Ms'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List LoginpemakaiM', 'url'=>array('index')),
	array('label'=>'Create LoginpemakaiM', 'url'=>array('create')),
	array('label'=>'Update LoginpemakaiM', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete LoginpemakaiM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LoginpemakaiM', 'url'=>array('admin')),
);
?>

<h1>View LoginpemakaiM #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'user_nama',
		'user_password',
		'roles',
	),
)); ?>
