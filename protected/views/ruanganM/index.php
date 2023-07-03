<?php
/* @var $this RuanganMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ruangan Ms',
);

$this->menu=array(
	array('label'=>'Create RuanganM', 'url'=>array('create')),
	array('label'=>'Manage RuanganM', 'url'=>array('admin')),
);
?>

<h1>Ruangan Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
