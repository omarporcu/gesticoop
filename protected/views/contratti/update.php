<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	$model->ncontratto=>array('view','id'=>$model->ncontratto),
	'Aggiorna',
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	array('label'=>'Nuovo Contratto', 'url'=>array('create')),
	array('label'=>'Dettagli Contratto', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Aggiorna Contratto <?php echo $model->ncontratto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>