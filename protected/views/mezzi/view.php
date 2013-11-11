<?php
/* @var $this MezziController */
/* @var $model Mezzi */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
	array('label'=>'Aggiorna Mezzo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Mezzo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Mezzo <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marca',
		'modello',
		'prezzo',
		'rata',
		'targa',
		'immatricolazione',
		'proprietario',
		'note',
	),
)); ?>
