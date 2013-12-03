<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clienti'=>array('index'),
	$model->ragione_sociale=>array('view','id'=>$model->id),
	'Aggiorna',
);

$this->menu=array(
	array('label'=>'Clienti', 'url'=>array('index')),
	array('label'=>'Nuovo Cliente', 'url'=>array('create')),
	array('label'=>'Dettagli Cliente', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Aggiorna Cliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>