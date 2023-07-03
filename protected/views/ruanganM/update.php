<?php
/* @var $this RuanganMController */
/* @var $model RuanganM */

$this->breadcrumbs=array(
	'Ruangan Ms'=>array('index'),
	$model->ruangan_id=>array('view','id'=>$model->ruangan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RuanganM', 'url'=>array('index')),
	array('label'=>'Create RuanganM', 'url'=>array('create')),
	array('label'=>'View RuanganM', 'url'=>array('view', 'id'=>$model->ruangan_id)),
	array('label'=>'Manage RuanganM', 'url'=>array('admin')),
);
?>

<h1>Update RuanganM <?php echo $model->ruangan_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>