<?php
/* @var $this ContrattiController */
/* @var $data Contratti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utente')); ?>:</b>
	<?php echo CHtml::encode($data->utente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('societa')); ?>:</b>
	<?php echo CHtml::encode($data->societa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipologia')); ?>:</b>
	<?php echo CHtml::encode($data->tipologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_inizio')); ?>:</b>
	<?php echo CHtml::encode($data->data_inizio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_fine')); ?>:</b>
	<?php echo CHtml::encode($data->data_fine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruolo')); ?>:</b>
	<?php echo CHtml::encode($data->ruolo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('provvigione')); ?>:</b>
	<?php echo CHtml::encode($data->provvigione); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	*/ ?>

</div>