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

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Prestito
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo $form->textField($model,'causale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'causale'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'totale'); ?>
				<?php echo $form->textField($model,'totale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'totale'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'n_rate'); ?>
				<?php echo $form->textField($model,'n_rate',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'n_rate'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<i>inserire data nel formato gg/mm/aaaa</i> <br>
				<?php echo $form->textField($model,'data'); ?>
				<?php echo $form->error($model,'data'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'scadenza'); ?>
				<i>inserire data nel formato gg/mm/aaaa</i> <br>
				<?php echo $form->textField($model,'scadenza'); ?>
				<?php echo $form->error($model,'scadenza'); ?>
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
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'societa'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo $form->textField($model,'anagrafica',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'anagrafica'); ?>
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
				<?php echo $form->labelEx($model,'altro'); ?>
				<?php echo $form->textArea($model,'altro',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'altro'); ?>
			</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->