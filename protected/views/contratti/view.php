<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	$model->ncontratto,
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	array('label'=>'Nuovo Contratto', 'url'=>array('create')),
	array('label'=>'Aggiorna Contratto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Contratto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Contratto <?php echo $model->ncontratto; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'utente',
		'societa',
		'tipologia',
		'data_inizio',
		'data_fine',
		'ruolo',
		'provvigione',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
