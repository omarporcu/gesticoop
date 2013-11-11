<?php
/* @var $this FattureController */
/* @var $data Fatture */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_fattura')); ?>:</b>
	<?php echo CHtml::encode($data->numero_fattura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('societa')); ?>:</b>
	<?php echo CHtml::encode($data->societa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('causale')); ?>:</b>
	<?php echo CHtml::encode($data->causale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrizione')); ?>:</b>
	<?php echo CHtml::encode($data->descrizione); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('imponibile')); ?>:</b>
	<?php echo CHtml::encode($data->imponibile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_accredito')); ?>:</b>
	<?php echo CHtml::encode($data->data_accredito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	*/ ?>

</div>