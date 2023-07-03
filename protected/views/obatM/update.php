<?php
/* @var $this ObatMController */
/* @var $model ObatM */

$this->breadcrumbs=array(
	'Obat Ms'=>array('index'),
	$model->obat_id=>array('view','id'=>$model->obat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObatM', 'url'=>array('index')),
	array('label'=>'Create ObatM', 'url'=>array('create')),
	array('label'=>'View ObatM', 'url'=>array('view', 'id'=>$model->obat_id)),
	array('label'=>'Manage ObatM', 'url'=>array('admin')),
);
?>

<h1>Update ObatM <?php echo $model->obat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>