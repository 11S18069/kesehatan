<?php
/* @var $this PendaftaranTController */
/* @var $data PendaftaranT */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendaftaran_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pendaftaran_id), array('view', 'id'=>$data->pendaftaran_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruangan_id')); ?>:</b>
	<?php echo CHtml::encode($data->ruangan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_id')); ?>:</b>
	<?php echo CHtml::encode($data->obat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pasien_id')); ?>:</b>
	<?php echo CHtml::encode($data->pasien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_id')); ?>:</b>
	<?php echo CHtml::encode($data->pegawai_id); ?>
	<br />


</div>