<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contrattis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contratti', 'url'=>array('index')),
	array('label'=>'Create Contratti', 'url'=>array('create')),
	array('label'=>'Update Contratti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contratti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>View Contratti #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'utente',
		'societa',
		'tipologia',
		'data_inizio',
		'data_fine',
		'ruolo',
		'provvigione',
		'note',
	),
)); ?>
