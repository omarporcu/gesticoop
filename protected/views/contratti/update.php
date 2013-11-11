<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contrattis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contratti', 'url'=>array('index')),
	array('label'=>'Create Contratti', 'url'=>array('create')),
	array('label'=>'View Contratti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Update Contratti <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>