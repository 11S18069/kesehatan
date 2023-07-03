<?php
/* @var $this TransaksiObatController */
/* @var $model TransaksiObat */
/* @var $form CActiveForm */

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'transaksi-obat-form',
    'enableAjaxValidation' => false,
));
?>

<div class="form-group">
    <?php echo $form->labelEx($model, 'obat_id'); ?>
    <?php echo $form->textField($model, 'obat_id', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'obat_id', array('class' => 'help-block')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'tanggal'); ?>
    <?php echo $form->textField($model, 'tanggal', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'tanggal', array('class' => 'help-block')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'jumlah'); ?>
    <?php echo $form->textField($model, 'jumlah', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'jumlah', array('class' => 'help-block')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'harga'); ?>
    <?php echo $form->textField($model, 'harga', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'harga', array('class' => 'help-block')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'catatan'); ?>
    <?php echo $form->textArea($model, 'catatan', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'catatan', array('class' => 'help-block')); ?>
</div>

<div class="form-group">
    <?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>