<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contrattis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contratti', 'url'=>array('index')),
	array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Create Contratti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>