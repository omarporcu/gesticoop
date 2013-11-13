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

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Fattura
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'numero_fattura'); ?>
				<?php echo $form->textField($model,'numero_fattura',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'numero_fattura'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<i>inserire data nel formato gg/mm/aaaa</i> <br>
				<?php echo $form->textField($model,'data'); ?>
				<?php echo $form->error($model,'data'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipo'); ?>
				<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'tipo'); ?>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettagli
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
				<?php echo $form->labelEx($model,'cliente'); ?>
				<?php echo $form->textField($model,'cliente',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'cliente'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo $form->textField($model,'causale',array('size'=>116,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'causale'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo $form->textArea($model,'descrizione',array('rows'=>6, 'cols'=>83)); ?>
				<?php echo $form->error($model,'descrizione'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'imponibile'); ?>
				<?php echo $form->textField($model,'imponibile',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'imponibile'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_accredito'); ?>
				<i>inserire data nel formato gg/mm/aaaa</i> <br>
				<?php echo $form->textField($model,'data_accredito'); ?>
				<?php echo $form->error($model,'data_accredito'); ?>
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
				<?php echo $form->error($model,'note'); ?>
			</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->