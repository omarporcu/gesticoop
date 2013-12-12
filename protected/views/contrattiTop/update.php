<?php
/* @var $this ContrattiTopController */
/* @var $model ContrattiTop */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Aggiorna',
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	array('label'=>'Nuovo Contratto', 'url'=>array('create')),
	array('label'=>'Dettagli Contratto', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Aggiorna Contratto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>