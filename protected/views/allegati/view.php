<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$this->breadcrumbs=array(
	'Allegati'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Allegati', 'url'=>array('index')),
	array('label'=>'Nuovo Allegato', 'url'=>array('create')),
	array('label'=>'Aggiorna Allegato', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Allegato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Allegato #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
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
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

