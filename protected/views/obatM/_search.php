<?php
/* @var $this ObatMController */
/* @var $model ObatM */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'obat_id'); ?>
		<?php echo $form->textField($model,'obat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obat_nama'); ?>
		<?php echo $form->textField($model,'obat_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obat_jumlah'); ?>
		<?php echo $form->textField($model,'obat_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obat_harga'); ?>
		<?php echo $form->textField($model,'obat_harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->