<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fattures'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fatture', 'url'=>array('index')),
	array('label'=>'Create Fatture', 'url'=>array('create')),
	array('label'=>'Update Fatture', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fatture', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>View Fatture #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero_fattura',
		'tipo',
		'societa',
		'cliente',
		'causale',
		'descrizione',
		'imponibile',
		'data',
		'data_accredito',
		'note',
	),
)); ?>
