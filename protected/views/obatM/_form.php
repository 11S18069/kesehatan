<?php
/* @var $this ObatMController */
/* @var $model ObatM */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-m-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_nama'); ?>
		<?php echo $form->textField($model,'obat_nama'); ?>
		<?php echo $form->error($model,'obat_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_jumlah'); ?>
		<?php echo $form->textField($model,'obat_jumlah'); ?>
		<?php echo $form->error($model,'obat_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_harga'); ?>
		<?php echo $form->textField($model,'obat_harga'); ?>
		<?php echo $form->error($model,'obat_harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->