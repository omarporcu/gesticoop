<?php
/* @var $this SocietaController */
/* @var $model Societa */

$this->breadcrumbs=array(
	'Società'=>array('index'),
	$model->ragione_sociale,
);

$this->menu=array(
	array('label'=>'Società', 'url'=>array('index')),
	array('label'=>'Nuova Società', 'url'=>array('create')),
	array('label'=>'Aggiorna Società', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Società', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Societa', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Società <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ragione_sociale',
		'tipologia',
		'logo',
		'amministratore',
		'regione',
		'provincia',
		'comune',
		'cap',
		'indirizzo',
		'gruppo',
		'email',
		'telefono',
		'fax',
		'p_iva',
		'c_fiscale',
		'numero_iscrcc',
		'regione_iscrcc',
		'provincia_iscrcc',
		'comune_iscrcc',
		'data_iscrcc',
		'note',
	),
)); ?>
