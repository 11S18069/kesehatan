<?php
/* @var $this PegawaiMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pegawai Ms',
);

$this->menu=array(
	array('label'=>'Create PegawaiM', 'url'=>array('create')),
	array('label'=>'Manage PegawaiM', 'url'=>array('admin')),
);
?>

<h1>Pegawai Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
