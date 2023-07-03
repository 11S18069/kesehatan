<?php
/* @var $this ObatMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obat Ms',
);

$this->menu=array(
	array('label'=>'Create ObatM', 'url'=>array('create')),
	array('label'=>'Manage ObatM', 'url'=>array('admin')),
);
?>

<h1>Obat Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
