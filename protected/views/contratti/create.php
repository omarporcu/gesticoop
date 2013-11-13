<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	'Nuovo',
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Create Contratti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>