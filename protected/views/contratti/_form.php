<?php
/* @var $this ContrattiController */
/* @var $model Contratti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'utente'); ?>
		<?php echo $form->textField($model,'utente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'utente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'societa'); ?>
		<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'societa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipologia'); ?>
		<?php echo $form->textField($model,'tipologia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inizio'); ?>
		<?php echo $form->textField($model,'data_inizio'); ?>
		<?php echo $form->error($model,'data_inizio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_fine'); ?>
		<?php echo $form->textField($model,'data_fine'); ?>
		<?php echo $form->error($model,'data_fine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruolo'); ?>
		<?php echo $form->textField($model,'ruolo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ruolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provvigione'); ?>
		<?php echo $form->textField($model,'provvigione',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'provvigione'); ?>
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