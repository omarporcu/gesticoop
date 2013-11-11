<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */

$this->breadcrumbs=array(
	'Anagrafica'=>array('index'),
	$model->cognome.' '.$model->nome,
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('index')),
	array('label'=>'Nuova Anagrafica', 'url'=>array('create')),
	array('label'=>'Aggiorna Anagrafica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Anagrafica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Anagrafica', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Anagrafica <?php echo $model->cognome." ".$model->nome; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'cognome',
		'data_nascita',
		'regione_nascita',
		'provincia_nascita',
		'comune_nascita',
		'c_fiscale',
		'regione_residenza',
		'provincia_residenza',
		'comune_residenza',
		'indirizzo_residenza',
		'email',
		'telefono',
		'fax',
		'cellulare',
		'iban',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
