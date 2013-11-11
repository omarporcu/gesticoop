<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestiti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'causale'); ?>
		<?php echo $form->textField($model,'causale',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'causale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totale'); ?>
		<?php echo $form->textField($model,'totale',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'totale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_rate'); ?>
		<?php echo $form->textField($model,'n_rate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'n_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scadenza'); ?>
		<?php echo $form->textField($model,'scadenza'); ?>
		<?php echo $form->error($model,'scadenza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'societa'); ?>
		<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'societa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anagrafica'); ?>
		<?php echo $form->textField($model,'anagrafica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'anagrafica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altro'); ?>
		<?php echo $form->textArea($model,'altro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'altro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->