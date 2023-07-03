<?php
/* @var $this SiteController */
/* @var $model Obat */
/* @var $obatList Obat[] */

$this->pageTitle = 'Daftar Obat';
?>

<h1>Daftar Obat</h1>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="successMessage">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<table>
    <tr>
        <th>Nama Obat</th>
        <th>Fungsi Obat</th>
        <th>Harga Obat</th>
    </tr>
    <?php foreach ($obatList as $obat): ?>
        <tr>
            <td><?php echo $obat->nama; ?></td>
            <td><?php echo $obat->fungsi; ?></td>
            <td><?php echo $obat->harga; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Tambah Obat</h2>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'obat-form',
    'enableClientValidation' => true,
)); ?>

<div class="form">
    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'nama'); ?>
        <?php echo $form->textField($model, 'nama'); ?>
        <?php echo $form->error($model, 'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fungsi'); ?>
        <?php echo $form->textField($model, 'fungsi'); ?>
        <?php echo $form->error($model, 'fungsi'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'harga'); ?>
        <?php echo $form->textField($model, 'harga'); ?>
        <?php echo $form->error($model, 'harga'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Simpan'); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
