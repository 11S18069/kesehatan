<?php
/* @var $this LoginpemakaiMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Loginpemakai Ms',
);

$this->menu=array(
	array('label'=>'Create LoginpemakaiM', 'url'=>array('create')),
	array('label'=>'Manage LoginpemakaiM', 'url'=>array('admin')),
);
?>

<h1>Loginpemakai Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
