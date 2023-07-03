<?php
/* @var $this ObatMController */
/* @var $data ObatM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->obat_id), array('view', 'id'=>$data->obat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_nama')); ?>:</b>
	<?php echo CHtml::encode($data->obat_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->obat_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_harga')); ?>:</b>
	<?php echo CHtml::encode($data->obat_harga); ?>
	<br />


</div>