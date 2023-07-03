<?php
/* @var $this RuanganMController */
/* @var $data RuanganM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruangan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ruangan_id), array('view', 'id'=>$data->ruangan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruangan_nama')); ?>:</b>
	<?php echo CHtml::encode($data->ruangan_nama); ?>
	<br />


</div>