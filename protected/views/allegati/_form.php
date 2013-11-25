<?php
/* @var $this AllegatiController */
/* @var $model Allegati */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'allegati-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'idsezione'); ?>
		<?php echo $form->dropDownList(
			$model, 
			'idsezione', 
			CHtml::listData(
				Anagrafica::model()->findAll(array('order'=>'cognome')), 'id', 'concatened'),
				array(
					'empty'=>'Seleziona Anagrafica',
					'ajax'=>array(
						'type'=>'POST', //request type
					)
				)
			);
		?>
		<?php echo $form->error($model,'idsezione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sezione'); ?>
		<?php echo $form->textField($model,'sezione',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sezione'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'allegato'); ?>
		<?php echo $form->textField($model,'allegato',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'allegato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrizione'); ?>
		<?php echo $form->textField($model,'descrizione',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descrizione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inserimento'); ?>
		<?php echo $form->textField($model,'data_inserimento'); ?>
		<?php echo $form->error($model,'data_inserimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privato'); ?>
		<?php echo $form->textField($model,'privato',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'privato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visibile'); ?>
		<?php echo $form->textField($model,'visibile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'visibile'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->