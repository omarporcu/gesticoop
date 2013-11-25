<?php
/* @var $this DocumentiController */
/* @var $model Documenti */

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$model->anagrafica->cognome.' '.$model->anagrafica->nome=>array('anagrafica/view/'.$model->id_anagrafica),
	'Documenti',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$model->id_anagrafica)),
	array('label'=>'Nuovo Documento', 'url'=>array('create')),
	array('label'=>'Aggiorna Documento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'an'=>$model->id_anagrafica),'confirm'=>'Sicuro di voler eliminare il documento?')),
	//array('label'=>'Manage Documenti', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->tipo->nome.' - '.$model->anagrafica->cognome.' '.$model->anagrafica->nome; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_anagrafica',
		'tipologia',
		'data_rilascio',
		'ente_rilascio',
		'numero_documento',
		'scadenza',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
