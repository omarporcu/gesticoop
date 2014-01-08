<?php
/* @var $this VocicontController */
/* @var $model Vocicont */

$this->breadcrumbs=array(
	'Vociconts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vocicont', 'url'=>array('index')),
	array('label'=>'Create Vocicont', 'url'=>array('create')),
	array('label'=>'Update Vocicont', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vocicont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vocicont', 'url'=>array('admin')),
);
?>

<h1>View Vocicont #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_conteggio',
		'tipologia',
		'causale',
		'importo',
	),
)); ?>
