<?php
/* @var $this RuanganMController */
/* @var $model RuanganM */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ruangan_id'); ?>
		<?php echo $form->textField($model,'ruangan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruangan_nama'); ?>
		<?php echo $form->textField($model,'ruangan_nama'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->