<?php
/* @var $this PegawaiMController */
/* @var $data PegawaiM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pegawai_id), array('view', 'id'=>$data->pegawai_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_nama')); ?>:</b>
	<?php echo CHtml::encode($data->pegawai_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruangan_id')); ?>:</b>
	<?php echo CHtml::encode($data->ruangan_id); ?>
	<br />


</div>