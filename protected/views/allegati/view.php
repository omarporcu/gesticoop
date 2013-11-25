<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$this->breadcrumbs=array(
	'Allegatis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Allegati', 'url'=>array('index')),
	array('label'=>'Create Allegati', 'url'=>array('create')),
	array('label'=>'Update Allegati', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Allegati', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>View Allegati #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sezione',
		'idsezione',
		'allegato',
		'nome',
		'descrizione',
		'data_inserimento',
		'privato',
		'visibile',
	),
)); ?>
