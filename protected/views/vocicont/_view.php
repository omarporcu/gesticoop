<?php
/* @var $this VocicontController */
/* @var $data Vocicont */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_conteggio')); ?>:</b>
	<?php echo CHtml::encode($data->id_conteggio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipologia')); ?>:</b>
	<?php echo CHtml::encode($data->tipologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('causale')); ?>:</b>
	<?php echo CHtml::encode($data->causale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importo')); ?>:</b>
	<?php echo CHtml::encode($data->importo); ?>
	<br />


</div>