<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestitis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Prestiti', 'url'=>array('index')),
	array('label'=>'Create Prestiti', 'url'=>array('create')),
	array('label'=>'Update Prestiti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Prestiti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>View Prestiti #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'causale',
		'totale',
		'n_rate',
		'scadenza',
		'data',
		'societa',
		'anagrafica',
		'altro',
	),
)); ?>
