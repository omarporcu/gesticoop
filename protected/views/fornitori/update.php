<?php
/* @var $this FornitoriController */
/* @var $model Fornitori */

$this->breadcrumbs=array(
	'Fornitori'=>array('index'),
	$model->ragione_sociale=>array('view','id'=>$model->id),
	'Aggiorna',
);

$this->menu=array(
	array('label'=>'Fornitori', 'url'=>array('index')),
	array('label'=>'Nuovo Fornitore', 'url'=>array('create')),
	array('label'=>'Dettagli Fornitore', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Fornitori', 'url'=>array('admin')),
);
?>

<h1>Aggiorna Fornitore <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>