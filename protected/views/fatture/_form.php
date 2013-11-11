<?php
/* @var $this FattureController */
/* @var $model Fatture */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fatture-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_fattura'); ?>
		<?php echo $form->textField($model,'numero_fattura',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numero_fattura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'societa'); ?>
		<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'societa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente'); ?>
		<?php echo $form->textField($model,'cliente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'causale'); ?>
		<?php echo $form->textField($model,'causale',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'causale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrizione'); ?>
		<?php echo $form->textField($model,'descrizione',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descrizione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imponibile'); ?>
		<?php echo $form->textField($model,'imponibile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'imponibile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_accredito'); ?>
		<?php echo $form->textField($model,'data_accredito'); ?>
		<?php echo $form->error($model,'data_accredito'); ?>
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