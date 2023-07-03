<?php
/* @var $this PendaftaranTController */
/* @var $model PendaftaranT */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pendaftaran-t-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ruangan_id'); ?>
		<?php echo $form->textField($model,'ruangan_id'); ?>
		<?php echo $form->error($model,'ruangan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_id'); ?>
		<?php echo $form->textField($model,'obat_id'); ?>
		<?php echo $form->error($model,'obat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pasien_id'); ?>
		<?php echo $form->textField($model,'pasien_id'); ?>
		<?php echo $form->error($model,'pasien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pegawai_id'); ?>
		<?php echo $form->textField($model,'pegawai_id'); ?>
		<?php echo $form->error($model,'pegawai_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->