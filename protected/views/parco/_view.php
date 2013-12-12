<?php
/* @var $this ParcoController */
/* @var $model Parco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parco-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Mezzo
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'marca'); ?>
				<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'modello'); ?>
				<?php echo $form->textField($model,'modello',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'targa'); ?>
				<?php echo $form->textField($model,'targa',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'immatricolazione'); ?>
				<?php echo $form->textField($model,'immatricolazione', array('placeholder'=>'gg/mm/aaaa')); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Proprietario
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'proprietario'); ?>
				<?php echo $form->textField($model,'proprietario',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'proprietario'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'assegnatario'); ?>
				<?php echo $form->textField($model,'assegnatario',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'assegnatario'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Amministrazione
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'prezzo'); ?>
				<?php echo $form->textField($model,'prezzo',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'rata'); ?>
				<?php echo $form->textField($model,'rata',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Note
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'note'); ?>
				<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->