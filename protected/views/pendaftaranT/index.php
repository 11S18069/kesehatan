<?php
/* @var $this PendaftaranTController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendaftaran Ts',
);

$this->menu=array(
	array('label'=>'Create PendaftaranT', 'url'=>array('create')),
	array('label'=>'Manage PendaftaranT', 'url'=>array('admin')),
);
?>

<h1>Pendaftaran Ts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
