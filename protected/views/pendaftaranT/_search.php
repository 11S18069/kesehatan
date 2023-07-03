<?php
/* @var $this PendaftaranTController */
/* @var $model PendaftaranT */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pendaftaran_id'); ?>
		<?php echo $form->textField($model,'pendaftaran_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruangan_id'); ?>
		<?php echo $form->textField($model,'ruangan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obat_id'); ?>
		<?php echo $form->textField($model,'obat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pasien_id'); ?>
		<?php echo $form->textField($model,'pasien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pegawai_id'); ?>
		<?php echo $form->textField($model,'pegawai_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->