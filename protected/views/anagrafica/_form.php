<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anagrafica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Personali
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'nome'); ?>
				<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'nome'); ?>
			</td>
			<td align="bottom">
				<?php echo $form->labelEx($model,'cognome'); ?>
				<?php echo $form->textField($model,'cognome',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'cognome'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data_nascita'); ?>
				<?php echo $form->textField($model,'data_nascita', array('placeholder'=>'gg/mm/aaaa')); ?> 
				<?php echo $form->error($model,'data_nascita'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'c_fiscale'); ?>
				<?php echo $form->textField($model,'c_fiscale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'c_fiscale'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Luogo di Nascita
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_nascita'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'regione_nascita', 
					CHtml::listData(
						Comuni::model()->findAll(array('order'=>'regione')), 'regione', 'regione'),
						array(
							'empty'=>'Seleziona Regione',
							'ajax'=>array(
								'type'=>'POST', //request type
								'url'=>CController::createUrl('comuni/updateprovincianascita'), //url to call.
								'update'=>'#Anagrafica_provincia_nascita', //selector to update
							)
						)
					);
				?>
				<?php echo $form->error($model,'regione_nascita'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_nascita'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'provincia_nascita', 
					CHtml::listData(
						Comuni::model()->findAll(array('order'=>'provincia')), 'provincia', 'provincia'),
						array(
							'empty'=>'Seleziona Provincia',
							'ajax'=>array(
								'type'=>'POST', //request type
								'url'=>CController::createUrl('comuni/updatecomunenascita'), //url to call.
								'update'=>'#Anagrafica_comune_nascita', //selector to update
							)
						)
					);
				?>
				<?php echo $form->error($model,'provincia_nascita'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_nascita'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'comune_nascita', 
					CHtml::listData(
						Comuni::model()->findAll(array('order'=>'nome')), 'nome', 'nome'),
						array(
							'empty'=>'Seleziona Comune',
						)
					);
				?>
				<?php echo $form->error($model,'comune_nascita'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Residenza
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_residenza'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'regione_residenza', 
					CHtml::listData(
						Comuni::model()->findAll(array('order'=>'regione')), 'regione', 'regione'),
						array(
							'empty'=>'Seleziona Regione',
							'ajax'=>array(
								'type'=>'POST', //request type
								'url'=>CController::createUrl('comuni/updateprovinciaresidenza'), //url to call.
								'update'=>'#Anagrafica_provincia_residenza', //selector to update
							)
						)
					);
				?>
				<?php echo $form->error($model,'regione_residenza'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_residenza'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'provincia_residenza', 
					CHtml::listData(
						Comuni::model()->findAll(array('order'=>'provincia')), 'provincia', 'provincia'),
						array(
							'empty'=>'Seleziona Provincia',
							'ajax'=>array(
								'type'=>'POST', //request type
								'url'=>CController::createUrl('comuni/updatecomuneresidenza'), //url to call.
								'update'=>'#Anagrafica_comune_residenza', //selector to update
							)
						)
					);
				?>
				<?php echo $form->error($model,'provincia_residenza'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_residenza'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'comune_residenza', 
					CHtml::listData(
						Comuni::model()->findAll(array('order'=>'nome')), 'nome', 'nome'),
						array(
							'empty'=>'Seleziona Comune',
						)
					);
				?>
				<?php echo $form->error($model,'comune_residenza'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'indirizzo_residenza'); ?>
				<?php echo $form->textField($model,'indirizzo_residenza',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'indirizzo_residenza'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Recapiti telefonici
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'telefono'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'fax'); ?>
				<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'fax'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cellulare'); ?>
				<?php echo $form->textField($model,'cellulare',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'cellulare'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Posta Elettronica
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'email'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Bancari
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'iban'); ?>
				<?php echo $form->textField($model,'iban',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'iban'); ?>
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