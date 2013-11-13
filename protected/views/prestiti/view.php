<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestiti'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Prestiti', 'url'=>array('index')),
	array('label'=>'Nuovo Prestito', 'url'=>array('create')),
	array('label'=>'Aggiorna Prestito', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Prestito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Prestito #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
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
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>