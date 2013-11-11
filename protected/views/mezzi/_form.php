<?php
/* @var $this MezziController */
/* @var $model Mezzi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mezzi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modello'); ?>
		<?php echo $form->textField($model,'modello',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'modello'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prezzo'); ?>
		<?php echo $form->textField($model,'prezzo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prezzo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rata'); ?>
		<i>inserire data nel formato gg/mm/aaaa</i> <br>
		<?php echo $form->textField($model,'rata'); ?>
		<?php echo $form->error($model,'rata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'targa'); ?>
		<?php echo $form->textField($model,'targa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'targa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'immatricolazione'); ?>
		<i>inserire data nel formato gg/mm/aaaa</i> <br>
		<?php echo $form->textField($model,'immatricolazione'); ?>
		<?php echo $form->error($model,'immatricolazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proprietario'); ?>
		<?php echo $form->textField($model,'proprietario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'proprietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->