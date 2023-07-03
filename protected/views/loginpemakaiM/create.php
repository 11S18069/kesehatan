<?php
/* @var $this LoginpemakaiMController */
/* @var $model LoginpemakaiM */

$this->breadcrumbs=array(
	'Loginpemakai Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LoginpemakaiM', 'url'=>array('index')),
	array('label'=>'Manage LoginpemakaiM', 'url'=>array('admin')),
);
?>

<h1>Create LoginpemakaiM</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>