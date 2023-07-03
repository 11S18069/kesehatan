<?php
/* @var $this LoginpemakaiMController */
/* @var $model LoginpemakaiM */

$this->breadcrumbs=array(
	'Loginpemakai Ms'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LoginpemakaiM', 'url'=>array('index')),
	array('label'=>'Create LoginpemakaiM', 'url'=>array('create')),
	array('label'=>'View LoginpemakaiM', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage LoginpemakaiM', 'url'=>array('admin')),
);
?>

<h1>Update LoginpemakaiM <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>